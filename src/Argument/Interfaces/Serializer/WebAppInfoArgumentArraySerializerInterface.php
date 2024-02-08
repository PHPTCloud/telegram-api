<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface WebAppInfoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(WebAppInfoArgumentInterface $argument): array;
}
