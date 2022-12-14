<?php

/**
 * To work with binary search, the array should be ordered.
 */

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// $startTime = microtime(true);

use Tiojobs\BinarySearch\Algorithms\BinarySearch;
use Tiojobs\BinarySearch\Helpers\ExecutionTime;

$executionTime = new ExecutionTime();

$binarySearch = new BinarySearch();

$myArray = ['Icaro', 'Fabio', 'Antonio'];
sort($myArray);

try {
    $position = $binarySearch->find('Icaro', $myArray);

    dump("My array is on position '{$position}' and the value in the ordered array is '{$myArray[$position]}'");
} catch (Exception $exception) {
    dump($exception->getMessage());
}
