<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-08-12 14:57:54
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\GoogleTagManager\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'GoogleTagManager:uninstall';

    protected $description = 'Uninstall GoogleTagManager an app';

    public function getAppVer() {
        return config("GoogleTagManager.ver");
    }

    public function getAppName() {
        return config("GoogleTagManager.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App GoogleTagManager UnInstall cannelled");
            return false;
        }
    }
}