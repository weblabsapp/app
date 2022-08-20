<?php

namespace App\Factories\Sandbox;


use App\Console\Traits\SshTunnel;
use App\Enums\CommandsEnum;
use App\Enums\CoursesTagsEnum;
use App\Factories\AbstractFactory;
use App\Utils\TempFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use RenokiCo\PhpK8s\Exceptions\KubernetesAPIException;
use RenokiCo\PhpK8s\Instances\Container;
use RenokiCo\PhpK8s\Instances\MountedVolume;
use RenokiCo\PhpK8s\Instances\Volume;
use RenokiCo\PhpK8s\K8s;
use RenokiCo\PhpK8s\Kinds\K8sPod;
use RenokiCo\PhpK8s\Kinds\K8sResource;
use RenokiCo\PhpK8s\KubernetesCluster;
use Symfony\Component\Process\Process;

class Sandbox extends AbstractFactory
{
    use SshTunnel;

    const K8S_PATH = 'k8s';

    const BASE_K8S_VOLUME_PATH = '/home/k8s/volumes';

    private string $courseTag;

    private string $podName;

    private string $volumeName;

    /**
     * @return KubernetesCluster
     */
    public function getCluster()
    {
        return KubernetesCluster::fromUrl(env('KUBE_HOST'))
            ->withToken(env('KUBE_BEARER_TOKEN'));
    }

    /**
     * @return string
     */
    public function getPodName()
    {
        return $this->podName ?? $this->podName = uuid_make(
            md5(sprintf('user-sandbox-%s', Auth::id()))
        );
    }

    /**
     * @return string
     */
    private function getPodDeployment()
    {
        return base_path(self::K8S_PATH . '/' . $this->courseTag) . '/deployment.yaml';
    }

    /**
     * @return string
     */
    private function getVolumeName()
    {
        return $this->volumeName ?? $this->volumeName = uuid_make(
            md5(sprintf('user-volume-%s', Auth::id()))
        );
    }

    /**
     * @return string[]
     * @throws \Exception
     */
    private function getImageName()
    {
        switch ($this->courseTag) {
            case CoursesTagsEnum::PHP_COURSE_TAG:
                $imageName = ['wjurry/weblabs', 'php-8.1-cli'];
                break;
            default:
                throw new \Exception('Invalid image name');
        }

        return $imageName;
    }

    /**
     * Get absolute remote path for k8s volume
     *
     * @param $dirName
     * @return string
     */
    private function getRemoteVolumePath($dirName)
    {
        return self::BASE_K8S_VOLUME_PATH . DIRECTORY_SEPARATOR . $dirName;
    }

    /**
     * @return \RenokiCo\PhpK8s\Instances\Volume
     * @throws \Exception
     */
    private function createVolume($courseTag)
    {
        $volumeName = $this->getVolumeName();
        $relativeRemotePath = $volumeName . DIRECTORY_SEPARATOR . $courseTag;

        $exitCode = Artisan::call('k8s:mkdir', [
            'dir_name' => 'volumes' . DIRECTORY_SEPARATOR . $relativeRemotePath
        ]);

        if ($exitCode != 0) {
            throw new \Exception(__('cannot create sandbox volume', [
                'error' => Process::$exitCodes[$exitCode] ?? 'Unknown error'
            ]));
        }

        return K8s::volume()
            ->setAttribute('name', $volumeName)
            ->setAttribute('hostPath', [
                'path' => $this->getRemoteVolumePath($relativeRemotePath),
                'type' => 'Directory'
            ]);
    }

    /**
     * @return K8sResource|K8sPod
     */
    public function createPod()
    {
        return K8s::fromYamlFile(
            KubernetesCluster::fromUrl(env('KUBE_HOST')),
            $this->getPodDeployment()
        )->setName($this->getPodName());
    }

    /**
     * @param Volume $volume
     * @return Container
     * @throws \Exception
     */
    private function createContainer(Volume $volume)
    {
        return (new Container())
            ->setImage(...$this->getImageName())
            ->maxMemory(64, 'Mi')
            ->maxCpu('265m')
            ->setAttribute('workingDir', '/app')
            ->setAttribute('stdin', true)
            ->setAttribute('tty', true)
            ->setAttribute('imagePullPolicy', 'Always')
            ->addMountedVolumes([$volume->mountTo('/app')])
            ->setName($this->courseTag);
    }

    /**
     * Make a pod with container(s)
     *
     * @param $courseTag
     * @return array
     * @throws KubernetesAPIException
     */
    public function make($courseTag)
    {
        $this->courseTag = $courseTag;

        if ($this->isContainerReady($courseTag)) {
            return [$this->getPodName(), $this->getVolumeName()];
        }


        try {
            $pod = (new K8sPod($this->getCluster()))->getByName($this->getPodName());
            $container = $pod->getContainer($courseTag);

            if ($container && !$container->isReady()) {
                // Pod restartPolicy is Always, so if it is not running,
                // that means there is something wrong in kubernetes server
                $pod->delete();
                $pod = $this->createPod();
            }
        } catch (KubernetesAPIException $exception) {
            if ($exception->getCode() == 404) {
                $pod = $this->createPod();
            } else {
                throw $exception;
            }
        }

        $podContainers = $pod->getContainers();
        $courseContainer = $pod->getContainer($courseTag);

        if (!$courseContainer) {
            $volume = $this->createVolume($courseTag);
            $pod->addVolumes([$volume]);
            $courseContainer = $this->createContainer($volume);
            $podContainers = array_merge($podContainers, [$courseContainer]);
        }

        $pod->setContainers($podContainers)->createOrUpdate()->watch(function ($result, K8sPod $pod) use ($courseTag) {
            if (($container = $pod->getContainer('php')) && $container->isReady()) {
                return true;
            }
        });

        return [$pod->getName(), $this->getVolumeName()];
    }

    /**
     * @param string $courseTag
     * @return bool
     */
    public function isContainerReady(string $courseTag)
    {
        try {
            $pod = (new K8sPod($this->getCluster()))->getByName($this->getPodName());
            if ($pod && ($container = $pod->getContainer($courseTag))) {
                return $container->isReady();
            }
        } catch (KubernetesAPIException $exception) {
            return false;
        }

        return false;
    }

    /**
     * Execute code into pod container
     *
     * @param string $podId
     * @param string $courseTag
     * @param string $code
     * @param array $options
     * @return string|void
     * @throws \Exception
     */
    public function executeCommand(string $podId, string $courseTag, string $code, array $options = [])
    {
        $this->courseTag = $courseTag;

        $pod = (new K8sPod($this->getCluster()))->getByName($podId);
        if ($pod && ($containers = $pod->getContainers())) {
            foreach ($containers as $container) {
                if (($containerName = $container->getAttribute('name')) != $courseTag) {
                    continue;
                }
                /** @var MountedVolume $containerVolume */
                $containerVolume = $container->getMountedVolumes()[0];
                $containerVolumeName = $containerVolume->getAttribute('name');

                // Write script to a temp file
                $tempFile = TempFile::setCacheDir(storage_path('k8s/cache'));

                if (!$tempFile->write($code, CoursesTagsEnum::getCourseTypeExtension($courseTag))) {
                    throw new \Exception('cannot_write_script_file');
                }

                /** @var Volume $volume */
                foreach ($pod->getVolumes() as $volume) {
                    if ($volume->getAttribute('name') != $containerVolumeName) {
                        continue;
                    }
                    $commandResult = Artisan::call('k8s:upload', [
                        'source' => $tempFile->getFullPath(),
                        'destination' => sprintf('%s/%s',
                            $volume->getAttribute('hostPath')['path'], $tempFile->getTempFileName()
                        )
                    ]);

                    if ($commandResult != 0) {
                        $tempFile->removeTempFile();
                        throw new \Exception('cannot_write_script_file');
                    }
                }

                $commandResult = $this->getSshTunnel()->execute(
                    sprintf(
                        'timeout %u microk8s kubectl exec %s -- %s %s %s',
                        env('KUBE_MAX_EXEC_TIME'),
                        $podId,
                        CommandsEnum::getCommand($courseTag),
                        $this->optionsForCommand($options),
                        $tempFile->getTempFileName()
                    )
                );

                $tempFile->removeTempFile();

                if ($commandResult->getExitCode() == 124 /* Timeout */) {
                    return "Execution timeout (exit code: 124)";
                }

                return htmlentities($commandResult->getOutput());
            }
        }
    }

    /**
     * @param array $options
     * @return string
     */
    private function optionsForCommand(array $options)
    {
        switch ($this->courseTag) {
            case CoursesTagsEnum::PHP_COURSE_TAG:
                return implode(' ', array_map(function ($option, $value) {
                    return sprintf('-d%s=%s', $option, $value);
                }, array_keys($options), $options));
            case CoursesTagsEnum::PYTHON_COURSE_TAG:
            case CoursesTagsEnum::JAVASCRIPT_COURSE_TAG:
            default:
                return '';
        }
    }
}