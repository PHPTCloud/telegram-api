<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestUsersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestUsersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class KeyboardButtonRequestUsersArgumentArraySerializer implements KeyboardButtonRequestUsersArgumentArraySerializerInterface
{
    public function serialize(KeyboardButtonRequestUsersArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::REQUEST_ID->value] = $argument->getRequestId();

        if (null !== $argument->userIsBot()) {
            $data[TelegramApiFieldEnum::USER_IS_BOT->value] = $argument->userIsBot();
        }

        if (null !== $argument->userIsPremium()) {
            $data[TelegramApiFieldEnum::USER_IS_PREMIUM->value] = $argument->userIsPremium();
        }

        if (null !== $argument->getMaxQuantity()) {
            $data[TelegramApiFieldEnum::MAX_QUANTITY->value] = $argument->getMaxQuantity();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
