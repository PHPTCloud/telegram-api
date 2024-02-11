<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendChatActionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendChatActionArgumentInterface $argument): array;
}
