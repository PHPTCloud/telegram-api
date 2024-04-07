<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface GetChatMemberArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetChatMemberArgumentInterface $argument): array;
}
