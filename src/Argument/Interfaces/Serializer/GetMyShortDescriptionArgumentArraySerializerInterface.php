<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetMyShortDescriptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetMyShortDescriptionArgumentInterface $argument): array;
}
