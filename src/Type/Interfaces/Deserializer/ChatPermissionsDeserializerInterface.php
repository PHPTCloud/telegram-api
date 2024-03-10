<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPermissionsInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatPermissionsDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatPermissionsInterface;
}
