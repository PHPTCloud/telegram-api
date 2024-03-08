<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Utils\Interface\Factory;

use PHPTCloud\TelegramApi\Utils\Interface\Service\SortingAlgorithmServiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SortingAlgorithmServiceFactoryInterface
{
    public function createDefault(): SortingAlgorithmServiceInterface;
}
