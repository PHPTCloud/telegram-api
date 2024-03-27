<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberLeftInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberLeftDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberLeftTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberLeftDeserializer extends AbstractDeserializer implements ChatMemberLeftDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberLeftTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberLeftInterface
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
