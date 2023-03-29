<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FormatTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'format-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $table1 = "
            <table>
    <tbody>
    <tr>
        <th></th>
        <th>Body condition</th>
        <th>Body condition</th>
        <th>Body condition</th>
        <th>Body condition</th>
        <th>Body condition</th>
        <th>Body condition</th>
    </tr>
    <tr>
        <td></td>
        <td>Thin</td>
        <td>Thin</td>
        <td>Normal</td>
        <td>Normal</td>
        <td>Overweight</td>
        <td>Overweight</td>
    </tr>
    <tr>
        <td>Cat's weight (kg)</td>
        <td>Grams</td>
        <td>Cups</td>
        <td>Grams</td>
        <td>Cups</td>
        <td>Grams</td>
        <td>Cups</td>
    </tr>
    <tr>
        <td>2</td>
        <td>42</td>
        <td>4/8</td>
        <td>35</td>
        <td>3/8</td>
        <td>28</td>
        <td>2/8</td>
    </tr>
    <tr>
        <td>2.5</td>
        <td>49</td>
        <td>4/8</td>
        <td>41</td>
        <td>4/8</td>
        <td>33</td>
        <td>3/8</td>
    </tr>
    <tr>
        <td>3</td>
        <td>56</td>
        <td>5/8</td>
        <td>47</td>
        <td>4/8</td>
        <td>37</td>
        <td>3/8</td>
    </tr>
    <tr>
        <td>3.5</td>
        <td>63</td>
        <td>5/8</td>
        <td>52</td>
        <td>5/8</td>
        <td>42</td>
        <td>4/8</td>
    </tr>
    <tr>
        <td>4</td>
        <td>69</td>
        <td>6/8</td>
        <td>57</td>
        <td>5/8</td>
        <td>46</td>
        <td>4/8</td>
    </tr>
    <tr>
        <td>4.5</td>
        <td>75</td>
        <td>6/8</td>
        <td>62</td>
        <td>5/8</td>
        <td>50</td>
        <td>4/8</td>
    </tr>
    <tr>
        <td>5</td>
        <td>81</td>
        <td>7/8</td>
        <td>67</td>
        <td>7/8</td>
        <td>61</td>
        <td>5/8</td>
    </tr>
    <tr>
        <td>5.5</td>
        <td>86</td>
        <td>7/8</td>
        <td>72</td>
        <td>6/8</td>
        <td>57</td>
        <td>5/8</td>
    </tr>
    <tr>
        <td>6</td>
        <td>92</td>
        <td>1</td>
        <td>77</td>
        <td>7/8</td>
        <td>61</td>
        <td>6/8</td>
    </tr>
    <tr>
        <td>6.5</td>
        <td>97</td>
        <td>1</td>
        <td>81</td>
        <td>7/8</td>
        <td>65</td>
        <td>6/8</td>
    </tr>
    <tr>
        <td>7</td>
        <td>102</td>
        <td>1 + 1/8</td>
        <td>85</td>
        <td>7/8</td>
        <td>68</td>
        <td>6/8</td>
    </tr>
    <tr>
        <td>7.5</td>
        <td>108</td>
        <td>1 + 1/8</td>
        <td>90</td>
        <td>1</td>
        <td>72</td>
        <td>6/8</td>
    </tr>
    <tr>
        <td>8</td>
        <td>113</td>
        <td>1 + 2/8</td>
        <td>94</td>
        <td>1</td>
        <td>75</td>
        <td>6/8</td>
    </tr>
    <tr>
        <td>8.5</td>
        <td>118</td>
        <td>1 + 2/8</td>
        <td>98</td>
        <td>1 + 1/8</td>
        <td>28</td>
        <td>7/8</td>
    </tr>
    <tr>
        <td>9</td>
        <td>122</td>
        <td>1 + 3/8</td>
        <td>102</td>
        <td>1 + 1/8</td>
        <td>82</td>
        <td>7/8</td>
    </tr>
    <tr>
        <td>9.5</td>
        <td>127</td>
        <td>1 + 3/8</td>
        <td>106</td>
        <td>1 + 1/8</td>
        <td>85</td>
        <td>7/8</td>
    </tr>
    <tr>
        <td>10</td>
        <td>132</td>
        <td>1 + 3/8</td>
        <td>110</td>
        <td>1 + 2/8</td>
        <td>88</td>
        <td>1</td>
    </tr>
    </tbody>
</table>";
        $table2 = "<table >
    <tbody>
    <tr>
        <th></th>
        <th></th>
        <th>Poids</th>
        <th>adulte</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Poids</th>
        <th>Adulte</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td></td>
        <td>11kg</td>
        <td></td>
        <td>12kg</td>
        <td></td>
        <td>13kg</td>
        <td></td>
    </tr>
    <tr>
        <td>âge du chiot (mois)</td>
        <td>grammes</td>
        <td>dose(s)</td>
        <td>grammes</td>
        <td>dose(s)</td>
        <td>grammes</td>
        <td>dose(s)</td>
    </tr>
    <tr>
        <td>6</td>
        <td>223</td>
        <td>3</td>
        <td>223</td>
        <td>3</td>
        <td>251</td>
        <td>3</td>
    </tr>
    <tr>
        <td>7</td>
        <td>202</td>
        <td>2+6/8</td>
        <td>202</td>
        <td>2+6/8</td>
        <td>233</td>
        <td>2+6/8</td>
    </tr>
    <tr>
        <td>8</td>
        <td>181</td>
        <td>2+4/8</td>
        <td>181</td>
        <td>2+4/8</td>
        <td>217</td>
        <td>2+4/8</td>
    </tr>
    <tr>
        <td>9</td>
        <td>161</td>
        <td>2+1/8</td>
        <td>161</td>
        <td>2+1/8</td>
        <td>198</td>
        <td>2+1/8</td>
    </tr>
    <tr>
        <td>10</td>
        <td>160</td>
        <td>1+6/8</td>
        <td>160</td>
        <td>1+6/8</td>
        <td>180</td>
        <td>2+1/8</td>
    </tr>
    <tr>
        <td>11</td>
        <td>158</td>
        <td>1+6/8</td>
        <td>158</td>
        <td>1+6/8</td>
        <td>178</td>
        <td>2+1/8</td>
    </tr>
    <tr>
        <td>12</td>
        <td>161</td>
        <td>2+1/8</td>
        <td>161</td>
        <td>2+1/8</td>
        <td>198</td>
        <td>2+1/8</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>15kg</td>
        <td></td>
        <td>20kg</td>
        <td></td>
        <td>25kg</td>
        <td></td>
    </tr>
    <tr>
        <td>âge du chiot (mois)</td>
        <td>grammes</td>
        <td>dose(s)</td>
        <td>grammes</td>
        <td>dose(s)</td>
        <td>grammes</td>
        <td>dose(s)</td>
    </tr>
    <tr>
        <td>6</td>
        <td>265</td>
        <td>3+5/8</td>
        <td>329</td>
        <td>4+4/8</td>
        <td>389</td>
        <td>5+2/8</td>
    </tr>
    <tr>
        <td>7</td>
        <td>246</td>
        <td>3+3/8</td>
        <td>306</td>
        <td>4+1/8</td>
        <td>387</td>
        <td>5+2/8</td>
    </tr>
    <tr>
        <td>8</td>
        <td>229</td>
        <td>3+1/8</td>
        <td>285</td>
        <td>3+7/8</td>
        <td>351</td>
        <td>4+6/8</td>
    </tr>
    <tr>
        <td>9</td>
        <td>209</td>
        <td>2+7/8</td>
        <td>261</td>
        <td>3+4/8</td>
        <td>315</td>
        <td>4+2/8</td>
    </tr>
    <tr>
        <td>10</td>
        <td>190</td>
        <td>2+5/8</td>
        <td>237</td>
        <td>3+2/8</td>
        <td>281</td>
        <td>3+6/8</td>
    </tr>
    <tr>
        <td>11</td>
        <td>188</td>
        <td>2+4/8</td>
        <td>234</td>
        <td>3+1/8</td>
        <td>279</td>
        <td>3+6/8</td>
    </tr>
    <tr>
        <td>12</td>
        <td>187</td>
        <td>2+4/8</td>
        <td>233</td>
        <td>3+1/8</td>
        <td>277</td>
        <td>3+6/8</td>
    </tr>
    </tbody>
</table>";
        $xml = simplexml_load_string($table2);
        $json = json_encode($xml);
        $array = json_decode($json, true);

        //CutTtable
        $tableList = [];

        $tableStructure = $this->getStructureShema($array);


        $total = 0;
        $totalRecursive = 0;
        $this->getCountColumn($tableStructure,$array,$total,$totalRecursive);

        $dataArray = [];
        $this->getDeeperDataInOneArray($tableStructure,$array,$dataArray);

        $arrayIndex = $this->createSliceArray(($totalRecursive/$total),5);

        $FirstColumnArray = $this->getFirstColumn($dataArray);

        $newArraysSliced = $this->setArrayFromStructure($tableStructure,$arrayIndex,$dataArray,$FirstColumnArray);

        $html = '';
        //create table from SlidedArray
        for ($i=0;$i <count($arrayIndex) ;$i++ )
        {
            $html .= '<table>';
            $html .=  $this->recurciveHtmlCreatorFromArray($newArraysSliced[$i],10,'');
            $html .= '</table>';
        }

        dd($html);

    }

    function getStructureShema(Array $MainArray) : array
    {
        $tempArray = [];
        foreach ($MainArray as $key =>$value) {
            if(is_array($value) && !empty($value))
            {
                $tempArray[$key] = $this->getStructureShema($value);
            }
        }
        return $tempArray;
    }

    function getFirstColumn(array $dataArray):array
    {
        $ArrayReturn = [];

            foreach ($dataArray as $key => $value)
            {
                $ArrayReturn[$key][] =$value[0];
            }

        return $ArrayReturn;
    }
    function getCountColumn(array $structureShema,array $MainArray,int &$count,int &$totalCount)
    {

        foreach ($MainArray as $key =>$value) {

            if(empty($structureShema[$key]))
            {
                $totalCount += count($MainArray[$key]);
                $count++;
            }
            else{
                $this->getCountColumn($structureShema[$key],$MainArray[$key],$count,$totalCount);
            }
        }

    }

    function setArrayFromStructure(array $structureShema,array $sliceArray,array $dataArray,array $FirstColumnArray) : array
    {
        $returnArray = [];
        $ArrayCount = count($sliceArray);
        for ($i=0;$i <$ArrayCount ;$i++ )
        {
            $returnArray[] = $structureShema;

            $returnArray[$i] = $this->setOneArrayFromStructured($returnArray[$i],$sliceArray[$i],$dataArray,'',$FirstColumnArray);
        }
        return $returnArray;
    }
    function setOneArrayFromStructured(array &$structuredArray,array $sliceArray,array $dataArray,mixed $indexParent,array $FirstColumnArray):array
    {

        foreach ($structuredArray as $key =>$value) {

            if(empty($value))
            {
                $structuredArray[$key][] = $FirstColumnArray[$indexParent][0];

                foreach ($sliceArray as $keySliced => $usedIndex)
                {
                    if($usedIndex!== 0)
                    {
                        $structuredArray[$key][] = $dataArray[$indexParent][$usedIndex];
                    }
                }
            }
            else{
                $indexParent = $key;
                $structuredArray[$key] = $this->setOneArrayFromStructured($value,$sliceArray,$dataArray,$indexParent,$FirstColumnArray);
            }
        }
        return $structuredArray;
    }
    function getDeeperDataInOneArray(array $structureShema,array $MainArray,array &$referenceArrayOut)
    {
        foreach ($MainArray as $key =>$value) {

            if(empty($structureShema[$key]))
            {
                $referenceArrayOut[] = $value;
            }
            else{
                $this->getDeeperDataInOneArray($structureShema[$key],$MainArray[$key],$referenceArrayOut);
            }
        }
    }

    function createSliceArray(int $count,int $slice):array
    {
        $ReturnArray = [];
        $countManyArray = floor($count/$slice);
        $restCount = 0;
        for($i =0;$i < $countManyArray;$i++)
        {
            $tempArray =[];
            for($j = 0 ;$j < $slice;$j++)
            {
                $tempArray[] = $j + $i*$slice;
                $restCount++;
            }
            $ReturnArray[]=$tempArray;
        }
        if($restCount !== 0)
        {
                $tempArray =[];
                for($j = $restCount ;$j < $count;$j++)
                {
                    $tempArray[] = $j ;
                }
                $ReturnArray[]=$tempArray;
        }
        return $ReturnArray;
    }


    function recurciveHtmlCreatorFromArray(array $startArray, int $LimiteSize, string $LastBalise) : string
    {
        $LimiteSize -= 1;
        if ($LimiteSize === 0) {
            return 'end';
        }
        $currentHtml = '';
        $contextBalise = '';

        foreach ($startArray as $balise => $value) {
            if ($contextBalise === '' && is_string($balise)) {
                $contextBalise = $balise;
            }
            if (is_string($balise)) {
                $currentHtml .= $LastBalise===''?'<'.$contextBalise.'>':'';
                $currentHtml .= $this->recurcivereader($value, $LimiteSize, $contextBalise);
                $currentHtml .=  $LastBalise===''?'<'.$contextBalise.'>':'';
            }
            else if(is_int($balise) && is_array($value) )
            {
                $currentHtml .= '<'.$LastBalise.'>';
                $currentHtml .= $this->recurcivereader($value, $LimiteSize, $LastBalise);
                $currentHtml .= '</'.$LastBalise.'>';
            }
            else
            {
                $newBalise = '<'.($contextBalise===''?$LastBalise:$contextBalise).'>'.$value.'</'.($contextBalise===''?$LastBalise:$contextBalise).'>';
                $currentHtml .= $newBalise;
            }
            $contextBalise = '';

        }


        return $currentHtml;
    }


}


