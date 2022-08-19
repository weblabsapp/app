<?php

namespace App\Console\Commands\K8s;


use Illuminate\Console\Command;
use xobotyi\rsync\Rsync;
use xobotyi\rsync\SSH;

class UploadScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'k8s:upload {source} {destination}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload script file to K8s host';

    /**
     * @var bool
     */
    protected $hidden = true;

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \xobotyi\rsync\Exception\Command
     */
    public function handle()
    {
        $source = $this->argument('source');
        $destination = $this->argument('destination');

        if (empty($source) || empty($destination)) {
            return 1;
        }

        $destination = sprintf(  // Provide the full destination path (user@host:/target/path)
            '%s@%s:%s',
            env('VM_SSH_USER'),
            env('VM_SSH_HOST'),
            $destination
        );

        $rsync = new Rsync([
            Rsync::CONF_SSH => [
                SSH::CONF_EXECUTABLE => 'ssh',
                SSH::CONF_OPTIONS => [
                    SSH::OPT_OPTION => ['PasswordAuthentication=no', 'StrictHostKeyChecking=no'],
                    SSH::OPT_IDENTIFICATION_FILE => base_path('.ssh') . DIRECTORY_SEPARATOR . env('VM_SSH_PRV_KEY'),
                ]
            ],
        ]);

        $rsync->setOptions([
            Rsync::OPT_VERBOSE => true,
            Rsync::OPT_RECURSIVE => true,
            Rsync::OPT_CHECKSUM => true,
        ]);

        return $rsync
            ->sync($source, $destination)
            ->getExitCode();
    }
}
