<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatInterface;
}
