<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetChatMenuButtonArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetChatMenuButtonArgumentInterface $argument): array;
}
