<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\DataObject\SetChatMenuButtonArgument;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetChatMenuButtonArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetChatMenuButtonArgument $argument): array;
}
