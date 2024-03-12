<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UnbanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class UnbanChatMemberArgumentArraySerializer implements UnbanChatMemberArgumentArraySerializerInterface
{
    public function serialize(UnbanChatMemberArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::USER_ID->value] = $argument->getUserId();

        if ($argument->isOnlyIfBanned()) {
            $data[TelegramApiFieldEnum::ONLY_IF_BANNED->value] = $argument->isOnlyIfBanned();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
