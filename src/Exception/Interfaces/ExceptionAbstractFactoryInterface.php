<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ExceptionAbstractFactoryInterface
{
    public function createByApiErrorMessage(string $message): ?TelegramApiExceptionInterface;
}
