<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class KeyboardButtonRequestChatArgumentArraySerializer implements KeyboardButtonRequestChatArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ChatAdministratorRightsArgumentArraySerializerInterface $chatAdministratorRightsArgumentArraySerializer,
    ) {
    }

    public function serialize(KeyboardButtonRequestChatArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::REQUEST_ID->value] = $argument->getRequestId();
        $data[TelegramApiFieldEnum::CHAT_IS_CHANNEL->value] = $argument->chatIsChannel();

        if (null !== $argument->chatIsForum()) {
            $data[TelegramApiFieldEnum::CHAT_IS_FORUM->value] = $argument->chatIsForum();
        }

        if (null !== $argument->chatHasUsername()) {
            $data[TelegramApiFieldEnum::CHAT_HAS_USERNAME->value] = $argument->chatHasUsername();
        }

        if (null !== $argument->chatIsCreated()) {
            $data[TelegramApiFieldEnum::CHAT_IS_CREATED->value] = $argument->chatIsCreated();
        }

        if ($argument->getUserAdministratorRights()) {
            $data[TelegramApiFieldEnum::USER_ADMINISTRATOR_RIGHTS->value]
                = $this->chatAdministratorRightsArgumentArraySerializer->serialize($argument->getUserAdministratorRights());
        }

        if ($argument->getBotAdministratorRights()) {
            $data[TelegramApiFieldEnum::USER_ADMINISTRATOR_RIGHTS->value]
                = $this->chatAdministratorRightsArgumentArraySerializer->serialize($argument->getUserAdministratorRights());
        }

        if (null !== $argument->botIsMember()) {
            $data[TelegramApiFieldEnum::BOT_IS_MEMBER->value] = $argument->botIsMember();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
