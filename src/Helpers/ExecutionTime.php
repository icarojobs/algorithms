<?php

declare(strict_types=1);

namespace Tiojobs\BinarySearch\Helpers;

class ExecutionTime
{
    public function __construct(
        private $start_time = 0,
        private $end_time = 0,
        private $execution_time = 0,
    ) {
        $this->start_time = microtime(true);
    }

    public function __destruct()
    {
        $this->end_time = microtime(true);
        $this->execution_time = round($this->end_time - $this->start_time, 2);
        dump("Script executed in {$this->execution_time} seconds");
    }
}
