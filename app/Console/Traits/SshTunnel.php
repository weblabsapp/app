<?php

namespace App\Console\Traits;


use Spatie\Ssh\Ssh;

trait SshTunnel
{
    /**
     * @var Ssh
     */
    protected $sshTunnel;

    /**
     * Get Ssh Tunnel instance
     *
     * @return Ssh
     */
    public function getSshTunnel()
    {
        return $this->sshTunnle ?? $this->sshTunnel = Ssh::create(env('VM_SSH_USER'), env('VM_SSH_HOST'))
            ->usePrivateKey(env('VM_SSH_PRV_KEY'))
            ->addExtraOption('-o StrictHostKeyChecking=no')
            ->disablePasswordAuthentication();
    }

    /**
     * Get private key file path
     *
     * @return string
     */
    public function getPrivateKeyPath()
    {
        return env('VM_SSH_PRV_KEY');
    }
}