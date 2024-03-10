<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPhotoInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatPhotoDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatPhotoInterface;
}
