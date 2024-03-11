<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonPollTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestUsersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class KeyboardButtonArgumentArraySerializer implements KeyboardButtonArgumentArraySerializerInterface
{
    public function __construct(
        private readonly WebAppInfoArgumentArraySerializerInterface $webAppInfoArgumentArraySerializer,
        private readonly KeyboardButtonRequestUsersArgumentArraySerializerInterface $keyboardButtonRequestUsersArgumentArraySerializer,
        private readonly KeyboardButtonRequestChatArgumentArraySerializerInterface $keyboardButtonRequestChatArgumentArraySerializer,
        private readonly KeyboardButtonPollTypeArgumentArraySerializerInterface $keyboardButtonPollTypeArgumentArraySerializer,
    ) {
    }

    public function serialize(KeyboardButtonArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();

        if (null !== $argument->getRequestUsers()) {
            $data[TelegramApiFieldEnum::REQUEST_USERS->value]
                = $this->keyboardButtonRequestUsersArgumentArraySerializer->serialize($argument->getRequestUsers());
        }

        if (null !== $argument->getRequestChat()) {
            $data[TelegramApiFieldEnum::REQUEST_CHAT->value]
                = $this->keyboardButtonRequestChatArgumentArraySerializer->serialize($argument->getRequestChat());
        }

        if (null !== $argument->getRequestPoll()) {
            $data[TelegramApiFieldEnum::REQUEST_POLL->value]
                = $this->keyboardButtonPollTypeArgumentArraySerializer->serialize($argument->getRequestPoll());
        }

        if (null !== $argument->isRequestContact()) {
            $data[TelegramApiFieldEnum::REQUEST_CONTACT->value] = $argument->isRequestContact();
        }

        if (null !== $argument->isRequestLocation()) {
            $data[TelegramApiFieldEnum::REQUEST_LOCATION->value] = $argument->isRequestLocation();
        }

        if (null !== $argument->getWebApp()) {
            $data[TelegramApiFieldEnum::WEB_APP->value]
                = $this->webAppInfoArgumentArraySerializer->serialize($argument->getWebApp());
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
