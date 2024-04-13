<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface BotCommandArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(BotCommandArgumentInterface $argument): array;
}
