<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Utils\Interface\Service;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SortingAlgorithmServiceInterface
{
    /**
     * @param int[] $array
     *
     * @return int[]
     */
    public function sortArrayOfNumbers(array $array): array;
}
