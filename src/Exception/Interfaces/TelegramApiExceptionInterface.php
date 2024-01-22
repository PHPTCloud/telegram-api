<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TelegramApiExceptionInterface
{
    public function getExceptionCode(): string;
}
