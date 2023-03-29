<?php


namespace App\Src\DataChangeChecker;




use App\Src\Tools\LogManager;
use App\Src\Tools\TypeDetector;
use PhpParser\Builder\Function_;

class TransFormer
{
    public string $dataJson;


    public function __construct(string $dataJson)
    {
        $this->dataJson = $dataJson;
    }

    public function tranformData():string|array
    {
        //ajouter verification json et test de memoire
        return $this->recursiveStructureCreator(json_decode($this->dataJson,true) );
    }
    private function recursiveStructureCreator( $startData, int $deepLimit = 10, int $deep = 0):string|array
    {
        if($deep > $deepLimit )
        {
            return 'endDeep';
        }
        if(is_array($startData))
        {
            $returnData = [];

            foreach ($startData as $key => $data)
            {
                $returnData[$key] = $this->recursiveStructureCreator( $data,$deep +1);
            }
            return $returnData;
        }

        return TypeDetector::getType($startData);
    }



}
