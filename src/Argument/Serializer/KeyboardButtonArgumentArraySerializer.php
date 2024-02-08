<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class KeyboardButtonArgumentArraySerializer implements KeyboardButtonArgumentArraySerializerInterface
{
    public function serialize(KeyboardButtonArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();

        if ($argument->getRequestUsers() !== null) {
            // @TODO: Сделать сериализатор
        }

        if ($argument->getRequestChat() !== null) {
            // @TODO: Сделать сериализатор
        }

        if ($argument->getRequestPoll() !== null) {
            // @TODO: Сделать сериализатор
        }

        if ($argument->isRequestContact() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_CONTACT->value] = $argument->isRequestContact();
        }

        if ($argument->isRequestLocation() !== null) {
            $data[TelegramApiFieldEnum::REQUEST_LOCATION->value] = $argument->isRequestLocation();
        }

        if ($argument->getWebApp() !== null) {
            // @TODO: Сделать сериализатор
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
