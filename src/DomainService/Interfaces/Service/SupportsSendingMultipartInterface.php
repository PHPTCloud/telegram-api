<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ArgumentInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @see \PHPTCloud\TelegramApi\DomainService\Traits\SupportsSendingMultipartTrait
 */
interface SupportsSendingMultipartInterface
{
    public function sendMultipart(
        SerializerInterface $serializer,
        ArgumentInterface $argument,
        string $method,
    ): ResponseInterface;
}
