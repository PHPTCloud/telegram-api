<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatAdministratorCustomTitleArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SetChatAdministratorCustomTitleArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetChatAdministratorCustomTitleArgumentInterface $argument): array;
}
