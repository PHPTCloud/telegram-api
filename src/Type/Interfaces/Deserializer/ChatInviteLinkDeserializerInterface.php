<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatInviteLinkDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatInviteLinkInterface;
}
