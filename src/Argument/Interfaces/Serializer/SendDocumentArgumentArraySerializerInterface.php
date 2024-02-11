<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendDocumentArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendDocumentArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendDocumentArgumentInterface $argument): array;
}
