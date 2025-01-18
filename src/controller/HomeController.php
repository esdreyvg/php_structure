<?php
namespace App\controller;

class homeController
{
    public function Index(): void 
    {
        //Setup configuration
        $config = require __DIR__.'/../../config/config.php';

        //Access to the Configures
        $dbConfig = $config['database'];
        $emailConfig = $config['email'];
        $logConfig = $config['logging'];

        $host = $dbConfig['host'];
        $smtpHost = $emailConfig['smtp_host'];
        $logFile = $logConfig['log_file'];

        include '../view/home.php';
    }
}
