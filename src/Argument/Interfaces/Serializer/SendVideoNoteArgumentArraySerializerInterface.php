<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoNoteArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendVideoNoteArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendVideoNoteArgumentInterface $argument): array;
}
