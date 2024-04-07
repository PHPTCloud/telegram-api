<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberOwnerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberOwnerDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberOwnerTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberOwnerDeserializer extends AbstractDeserializer implements ChatMemberOwnerDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberOwnerTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberOwnerInterface
    {
        $status = $data[TelegramApiFieldEnum::STATUS->value] ?? null;
        $user = $this->userDeserializer->deserialize($data[TelegramApiFieldEnum::USER->value]);
        $isAnonymous = $data[TelegramApiFieldEnum::IS_ANONYMOUS->value] ?? null;
        $customTitle = $data[TelegramApiFieldEnum::CUSTOM_TITLE->value] ?? null;

        $status = $this->filterString($status);
        $isAnonymous = $this->filterBoolean($isAnonymous);
        $customTitle = $this->filterString($customTitle);

        return $this->typeFactory->create(
            $status,
            $user,
            $isAnonymous,
            $customTitle,
        );
    }
}
