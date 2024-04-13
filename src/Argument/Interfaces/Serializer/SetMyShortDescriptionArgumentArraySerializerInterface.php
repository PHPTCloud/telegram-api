<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetMyShortDescriptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetMyShortDescriptionArgumentInterface $argument): array;
}
