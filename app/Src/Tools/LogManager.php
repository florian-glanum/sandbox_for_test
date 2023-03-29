<?php

namespace App\Src\Tools;

use App\Src\Tools\ILog;
class LogManager
{
    private static ILog $logger;
    public static function setLogger(ILog $logger)
    {
        self::$logger = $logger;
    }
    public static function logError($message)
     {

         self::$logger->log($message);
     }


}
