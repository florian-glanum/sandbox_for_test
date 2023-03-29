<?php

namespace App\Console\Commands;

use App\Src\AddScript\xmlNormelizer;
use App\Src\DataChangeChecker\Checker;
use App\Src\DataChangeChecker\Normaliser;
use App\Src\DataChangeChecker\TransFormer;
use App\Src\Tools\FileHelper;
use App\Src\Tools\LaravelLog;
use App\Src\Tools\LogManager;
use Illuminate\Console\Command;

class CompareJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compare-json';

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
        LogManager::setLogger(new LaravelLog());

        $text = FileHelper::getDataFromFile('C:\laragon\www\git\sandbox_for_test\storage\app\public\LotsNewProgramme.json');

//        dd($text);
//        $Normalizer = new Normaliser(new xmlNormelizer());/
//
//        $dataNormalize = $Normalizer->Normalize($text);

        $transFormer = new TransFormer($text);

        $dataTransfomed = $transFormer->tranformData();

        $dataTransfomed = json_encode($dataTransfomed);

        $directoryPath = 'C:\laragon\www\git\sandbox_for_test\storage\app\public\DeltaDirectory';
        $checker = new Checker($dataTransfomed,'structure_test.json',$directoryPath);
        $checker->startCheck();

        if(!$checker->startCheck())
        {
            dd('FAIL');
        }
        dd('OK');
    }
}
