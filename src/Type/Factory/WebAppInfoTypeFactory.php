<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\WebAppInfo;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\WebAppInfoTypeFactoryInterface;

class WebAppInfoTypeFactory implements WebAppInfoTypeFactoryInterface
{
    public function create(string $url): WebAppInfoInterface
    {
        return new WebAppInfo($url);
    }
}
