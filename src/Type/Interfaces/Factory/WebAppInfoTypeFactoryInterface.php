<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;

interface WebAppInfoTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $url): WebAppInfoInterface;
}
