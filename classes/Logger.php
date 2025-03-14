<?php

namespace classes;

trait Logger
{
    public function log($message){
        $logFile = 'storage/logs/' . date('Y-m-d') . '.log';
        $time = date('Y-m-d H:i:s');
        file_put_contents($logFile, $time . $message . PHP_EOL, FILE_APPEND);
    }

}