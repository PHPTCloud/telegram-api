<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageCaptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface EditMessageCaptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(EditMessageCaptionArgumentInterface $argument): array;
}
