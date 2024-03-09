<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class BanChatMemberArgumentArraySerializer implements BanChatMemberArgumentArraySerializerInterface
{
    public function serialize(BanChatMemberArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::USER_ID->value] = $argument->getUserId();

        if ($argument->getUntilDate()) {
            $data[TelegramApiFieldEnum::UNTIL_DATE->value] = $argument->getUntilDate();
        }

        if ($argument->isRevokeMessages()) {
            $data[TelegramApiFieldEnum::REVOKE_MESSAGES->value] = $argument->isRevokeMessages();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
