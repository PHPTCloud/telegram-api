<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface BanChatMemberArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(BanChatMemberArgumentInterface $argument): array;
}
