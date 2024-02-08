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

        if ($argument->getRequestUsers() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_USERS->value]
                = $this->keyboardButtonRequestUsersArgumentArraySerializer->serialize($argument->getRequestUsers());
        }

        if ($argument->getRequestChat() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_CHAT->value]
                = $this->keyboardButtonRequestChatArgumentArraySerializer->serialize($argument->getRequestChat());
        }

        if ($argument->getRequestPoll() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_POLL->value]
                = $this->keyboardButtonPollTypeArgumentArraySerializer->serialize($argument->getRequestPoll());
        }

        if ($argument->isRequestContact() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_CONTACT->value] = $argument->isRequestContact();
        }

        if ($argument->isRequestLocation() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_LOCATION->value] = $argument->isRequestLocation();
        }

        if ($argument->getWebApp() !== null) {
            $data[TelegramApiFieldEnum::WEB_APP->value]
                = $this->webAppInfoArgumentArraySerializer->serialize($argument->getWebApp());
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
