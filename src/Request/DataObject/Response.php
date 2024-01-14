<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\DataObject;

use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class Response implements ResponseInterface
{
    public function __construct(
        private readonly array   $headers = [],
        private readonly array   $responseData = [],
        private readonly ?int    $code = null,
        private readonly ?string $errorMessage = null,
    ) {}

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getResponseData(): array
    {
        return $this->responseData;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function isError(): bool
    {
        return !empty($this->errorMessage);
    }
}
