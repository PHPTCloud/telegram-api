<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\Factory;

use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ResponseFactoryInterface
{
    public function create(
        array   $headers = [],
        array   $responseData = [],
        ?int    $code = null,
        ?string $errorMessage = null,
    ): ResponseInterface;
}
