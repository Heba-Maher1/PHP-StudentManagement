<?php

namespace Traits;

trait Loggable
{
    private string $logFile = 'log.txt';

    private function log(string $message): void {
        file_put_contents($this->logFile, $message . PHP_EOL, FILE_APPEND);
    }
}
