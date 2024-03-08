<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TelegramApiExceptionInterface
{
    public function getExceptionCode(): string;
}
