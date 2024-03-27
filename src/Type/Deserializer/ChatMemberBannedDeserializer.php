<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberBannedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberBannedDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberBannedTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberBannedDeserializer extends AbstractDeserializer implements ChatMemberBannedDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberBannedTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberBannedInterface
    {
        $status = $data[TelegramApiFieldEnum::STATUS->value] ?? null;
        $user = $this->userDeserializer->deserialize($data[TelegramApiFieldEnum::USER->value]);
        $untilDate = $data[TelegramApiFieldEnum::UNTIL_DATE->value] ?? null;

        $status = $this->filterString($status);
        $untilDate = $this->filterNumeric($untilDate);

        return $this->typeFactory->create(
            $status,
            $user,
            $untilDate,
        );
    }
}
