<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetChatPhotoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetChatPhotoArgumentInterface $argument): array;
}
