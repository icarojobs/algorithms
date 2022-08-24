<?php

declare(strict_types=1);

namespace Tiojobs\BinarySearch\Algorithms;

use ArrayIterator;
use InvalidArgumentException;

class BinarySearch
{
    public function find(mixed $needle, array|ArrayIterator $array): int
    {
        $low = 0;
        $high = count($array) - 1;

        while ($low <= $high) {
            $middle = floor(($low + $high) / 2);

            if ($array[$middle] == $needle) {
                return (int) $middle;
            }

            if ($array[$middle] > $needle) {
                $high = $middle - 1;
                continue;
            }

            $low = $middle + 1;
        }

        throw new InvalidArgumentException("Valor não encontrado. Ordene o seu array com a função sort(array) e tente novamente.");
    }
}
