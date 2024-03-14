<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\RevokeChatInviteLinkArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class RevokeChatInviteLinkArgumentArraySerializer implements RevokeChatInviteLinkArgumentArraySerializerInterface
{
    public function serialize(RevokeChatInviteLinkArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::INVITE_LINK->value] = $argument->isUrlValueObject()
            ? $argument->getInviteLink()->getValue()
            : $argument->getInviteLink();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
