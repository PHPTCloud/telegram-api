<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface RevokeChatInviteLinkArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(RevokeChatInviteLinkArgumentInterface $argument): array;
}
