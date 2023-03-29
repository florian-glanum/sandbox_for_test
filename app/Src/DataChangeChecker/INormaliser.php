<?php


namespace App\Src\DataChangeChecker;


interface INormaliser
{
    public function Normalize(string $data) : string;
}
