<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberMemberDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberMemberTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberMemberDeserializer extends AbstractDeserializer implements ChatMemberMemberDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberMemberTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberMemberInterface
    {
        $status = $data[TelegramApiFieldEnum::STATUS->value] ?? null;
        $user = $this->userDeserializer->deserialize($data[TelegramApiFieldEnum::USER->value]);

        $status = $this->filterString($status);

        return $this->typeFactory->create(
            $status,
            $user,
        );
    }
}
