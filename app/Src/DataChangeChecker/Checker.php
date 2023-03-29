<?php


namespace App\Src\DataChangeChecker;


use App\Src\Tools\FileHelper;

class Checker
{
    private string $directoryPath;
    private string $dataTransfomedJson;
    private string $baseTitle;

    public function __construct(string $dataTransfomedJson, string $baseTitle, string $directoryPath)
    {
        $this->dataTransfomedJson = $dataTransfomedJson;
        $this->baseTitle = $baseTitle;
        $this->directoryPath = $directoryPath;
    }

    public function setFolderPath(string $directoryPath)
    {
        $this->directoryPath = $directoryPath;
    }

    private function rootFileExist(): bool
    {
        if (!is_dir($this->directoryPath)) {
            return false;
        }
        return file_exists($this->directoryPath.'/0_delta_'.$this->baseTitle);
    }

    private function getLastDeltaFile(): string|bool
    {
        $returnDirectory = array_diff(scandir($this->directoryPath, SCANDIR_SORT_DESCENDING), ['..', '.']);
        if (!$returnDirectory) {
            return false;
        }
        return $returnDirectory[0];
    }

    public function startCheck(): bool
    {
        if (!$this->rootFileExist()) {
            return false;
        }
        $lastFile = $this->getLastDeltaFile();

        //format
        $text = FileHelper::getDataFromFile($this->directoryPath.'/'.$lastFile);
        $text = preg_replace("/<br>|\n/", "", $text);
        $text = str_replace(" ", "", $text);
        $text = stripslashes($text);

        //hash test
        $hashStorelastFile = hash('sha256', $text);
        $hashdataTransfomed = hash('sha256', $this->dataTransfomedJson);

        //result

        if ($hashStorelastFile !== $hashdataTransfomed) {
            $stringNewID = $this->getIdOfFile($lastFile);
            $this->getFieldChange($this->dataTransfomedJson, $text);
//            $this->directoryPath
            FileHelper::writeNewFileAt(
                $this->directoryPath.'/'.$stringNewID.'_delta_structure_test.json',
                $this->dataTransfomedJson
            );
            return true;
        }


        //possiblité de le rendre plus complex en faisant un retour de donné avec les difference entre les deux tableaux
        //et non que le tableau du file stocké
        return true;
    }

    private function getIdOfFile(string $fileName): string
    {
        $splitedArray = explode('_', $fileName);
        $intId = intval($splitedArray[0]);
        return strval($intId + 1);
    }

    private function getFieldChange(string $dataTransformed, string $lastFile)
    {
        $returnArray = $this->recursiveCheckChange(json_decode( $dataTransformed,true),json_decode( $lastFile,true));

        dd($returnArray);
    }

    private function recursiveCheckChange($dataTransformed, $lastFile,string $CurrentPath = '', int $deepLimit = 10, int $deep = 0): string|array|null
    {
        if ($deep > $deepLimit) {
            return 'endDeep';
        }
        if (is_array($dataTransformed)) {
            $returnData = [];

            foreach ($dataTransformed as $key => $data) {
                if ($this->compareDataIsDifferent($data, $lastFile, $key)) {
                    return $CurrentPath.' => '.$key;
                }
                $RecursiveData = $this->recursiveCheckChange($data, $lastFile[$key],$CurrentPath.' => '.$key, $deep + 1);

                if($RecursiveData !== null)
                {
                    $returnData[] = $RecursiveData;
                }
            }
            if(empty($returnData))
            {
                return null;
            }
            return $returnData;
        }
        return null;
    }

    private function compareDataIsDifferent($a, $b, $bKey): bool
    {

        if (!key_exists($bKey, $b)) {
            return true;
        }
        if (is_array($a) !== is_array($b[$bKey])) {
            return true;
        }

        return false;
    }

}
