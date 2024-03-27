<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Enums\ChatMemberEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberAdministratorDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberBannedDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberLeftDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberMemberDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberOwnerDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberRestrictedDeserializerInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberDeserializer extends AbstractDeserializer implements ChatMemberDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberAdministratorDeserializerInterface $chatMemberAdministratorDeserializer,
        private readonly ChatMemberOwnerDeserializerInterface $chatMemberOwnerDeserializer,
        private readonly ChatMemberLeftDeserializerInterface $chatMemberLeftDeserializer,
        private readonly ChatMemberRestrictedDeserializerInterface $chatMemberRestrictedDeserializer,
        private readonly ChatMemberMemberDeserializerInterface $chatMemberMemberDeserializer,
        private readonly ChatMemberBannedDeserializerInterface $chatMemberBannedDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberInterface
    {
        return match ($data[TelegramApiFieldEnum::STATUS->value]) {
            ChatMemberEnum::ADMINISTRATOR->value => $this->chatMemberAdministratorDeserializer->deserialize($data),
            ChatMemberEnum::CREATOR->value => $this->chatMemberOwnerDeserializer->deserialize($data),
            ChatMemberEnum::LEFT->value => $this->chatMemberLeftDeserializer->deserialize($data),
            ChatMemberEnum::RESTRICTED->value => $this->chatMemberRestrictedDeserializer->deserialize($data),
            ChatMemberEnum::MEMBER->value => $this->chatMemberMemberDeserializer->deserialize($data),
            ChatMemberEnum::KICKED->value => $this->chatMemberBannedDeserializer->deserialize($data),
        };
    }
}
