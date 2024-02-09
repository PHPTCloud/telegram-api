<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Utils\Service;

use doganoo\PHPAlgorithms\Algorithm\Sorting\TimSort;
use PHPTCloud\TelegramApi\Utils\Interface\Service\SortingAlgorithmServiceInterface;

class TimSortAlgorithmService implements SortingAlgorithmServiceInterface
{
    public function __construct(
        private readonly TimSort $driver,
    ) {
    }

    /**
     * @param array $array
     * @param bool $direction - направление сортировки. True - по возрастанию, False - по убыванию.
     *
     * @return array|int[]
     */
    public function sortArrayOfNumbers(array $array, bool $direction = true): array
    {
        $sorted = $this->driver->sort($array);
        $min = $sorted[0];
        $max = $sorted[count($sorted) - 1];

        if (
            ($min > $max && $direction === true)
            || ($min < $max && $direction === false)
        ) {
            $sorted = array_reverse($sorted);
        }

        return $sorted;
    }
}
