<?php


namespace App\Src\DataChangeChecker;


use App\Src\Tools\LogManager;
use App\Src\DataChangeChecker\INormaliser;
class Normaliser
{
    public INormaliser $normaliser;
    public function __construct(INormaliser $normaliser)
    {
        $this->normaliser = $normaliser;
    }
    public function Normalize(string $data) : string
    {
        try {
          return $this->normaliser->Normalize($data);
        }
        catch(\Exception $e)
        {
            LogManager::logError('Normalizer Error');
            LogManager::logError($e);
            return  $e;
        }
    }
}
