<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ResponseFactoryInterface
{
    public function create(
        array $headers = [],
        array $responseData = [],
        int $code = null,
        string $errorMessage = null,
    ): ResponseInterface;
}
