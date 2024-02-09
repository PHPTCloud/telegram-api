<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Utils\Factory;

use doganoo\PHPAlgorithms\Algorithm\Sorting\TimSort;
use PHPTCloud\TelegramApi\Utils\Interface\Factory\SortingAlgorithmServiceFactoryInterface;
use PHPTCloud\TelegramApi\Utils\Interface\Service\SortingAlgorithmServiceInterface;
use PHPTCloud\TelegramApi\Utils\Service\TimSortAlgorithmService;

class SortingAlgorithmServiceFactory implements SortingAlgorithmServiceFactoryInterface
{
    public function createDefault(): SortingAlgorithmServiceInterface
    {
        return new TimSortAlgorithmService(new TimSort());
    }
}
