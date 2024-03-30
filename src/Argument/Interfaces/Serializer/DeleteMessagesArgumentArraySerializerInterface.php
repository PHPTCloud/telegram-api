<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessagesArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface DeleteMessagesArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(DeleteMessagesArgumentInterface $argument): array;
}
