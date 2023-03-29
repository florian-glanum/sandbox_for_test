<?php

namespace App\Src\AddScript;
use App\Src\DataChangeChecker\INormaliser;

class xmlNormelizer implements INormaliser
{
    public function Normalize(string $data): string
    {
        $xml = str_replace(array("\n", "\r", "\t"), '', $data);    // removes newlines, returns and tabs

        // replace double quotes with single quotes, to ensure the simple XML function can parse the XML
        $xml = trim(str_replace('"', "'", $xml));
        $simpleXml = simplexml_load_string($xml);

        return stripslashes(json_encode($simpleXml));    // returns a string with JSON object
    }
}
