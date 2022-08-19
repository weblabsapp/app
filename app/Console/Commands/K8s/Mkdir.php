<?php

namespace App\Console\Commands\K8s;

use App\Console\Traits\SshTunnel;
use Illuminate\Console\Command;

class Mkdir extends Command
{
    use SshTunnel;

    protected $signature = 'k8s:mkdir {dir_name}';

    protected $name = 'k8s:mkdir';

    protected $description = 'Create directory into K8s host';

    protected $hidden = true;

    private $baseDir = '/home/k8s';

    /**
     * Execute command
     *
     * @return int|null
     */
    public function handle()
    {
        $dirName = $this->argument('dir_name');

        if ($this->isExist($dirName)) {
            return 0;
        }

        return $this->getSshTunnel()
            ->execute(sprintf('mkdir -p %s', $this->getFullPath($dirName)))
            ->getExitCode();
    }

    /**
     * Determine if the directory exists under baseDir
     *
     * @param $dirName
     * @return bool
     */
    private function isExist($dirName): bool
    {
        return (bool) trim($this->getSshTunnel()->execute(
            sprintf('[ -d %s ] && echo 1', $this->getFullPath($dirName)))->getOutput()
        );
    }

    /**
     * Get absolute directory for dirName relative to baseDir
     *
     * @param $dirName
     * @return string
     */
    private function getFullPath($dirName)
    {
        return $this->baseDir . DIRECTORY_SEPARATOR . $dirName;
    }
}