<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SwitchInlineQueryChosenChatArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SwitchInlineQueryChosenChatArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SwitchInlineQueryChosenChatArgumentInterface $argument): array;
}
