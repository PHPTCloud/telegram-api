<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ExportChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ExportChatInviteLinkArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ExportChatInviteLinkArgumentInterface $argument): array;
}
