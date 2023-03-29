<?php


namespace App\Src\Tools;

class FileHelper
{

    public static function getDataFromFile(string $path):string
    {
        try {
            $currentFile =  file_get_contents($path);
        }
        catch (\Exception  $e)
        {
                LogManager::logError('File not found at ' . $path);
                LogManager::logError($e);
                return "File not found" . $path;
        }


         return $currentFile;
    }

    public static function writeNewFileAt(string $path , string $data )
    {
        file_put_contents($path,$data);
    }

}
