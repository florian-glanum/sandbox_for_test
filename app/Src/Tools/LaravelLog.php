<?php

namespace App\Src\Tools;

use Illuminate\Support\Facades\Log;
use App\Src\Tools\ILog;

class LaravelLog implements ILog
{
    public function Log(string $message)
    {
        Log::error($message);
    }

}
