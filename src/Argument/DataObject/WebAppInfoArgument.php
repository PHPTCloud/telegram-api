<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class WebAppInfoArgument implements WebAppInfoArgumentInterface
{
    public function __construct(
        private readonly string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
