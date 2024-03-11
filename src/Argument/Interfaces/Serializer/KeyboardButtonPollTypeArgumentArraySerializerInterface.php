<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonPollTypeArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface KeyboardButtonPollTypeArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(KeyboardButtonPollTypeArgumentInterface $argument): array;
}
