<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\Factory;

use PHPTCloud\TelegramApi\Request\DataObject\Response;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ResponseFactory implements ResponseFactoryInterface
{
    public function create(
        array $headers = [],
        array $responseData = [],
        int $code = null,
        string $errorMessage = null,
    ): ResponseInterface {
        return new Response($headers, $responseData, $code, $errorMessage);
    }
}
