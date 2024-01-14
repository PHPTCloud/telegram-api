<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface MessageEntityArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(MessageEntityArgumentInterface $argument): array;
}
