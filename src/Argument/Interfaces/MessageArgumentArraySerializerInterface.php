<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces;

use PHPTCloud\TelegramApi\SerializerInterface;

interface MessageArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(MessageArgumentInterface $argument): array;
}
