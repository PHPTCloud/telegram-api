<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaPhotoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface InputMediaPhotoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaPhotoArgumentInterface $argument): array;
}
