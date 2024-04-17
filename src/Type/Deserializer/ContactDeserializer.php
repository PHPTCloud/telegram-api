<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ContactDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ContactTypeFactoryInterface;

class ContactDeserializer extends AbstractDeserializer implements ContactDeserializerInterface
{
    public function __construct(
        private readonly ContactTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): ContactInterface
    {
        $phoneNumber = $data[TelegramApiFieldEnum::PHONE_NUMBER->value] ?? null;
        $firstName = $data[TelegramApiFieldEnum::FIRST_NAME->value] ?? null;
        $lastName = $data[TelegramApiFieldEnum::LAST_NAME->value] ?? null;
        $userId = $data[TelegramApiFieldEnum::USER_ID->value] ?? null;
        $vcard = $data[TelegramApiFieldEnum::VCARD->value] ?? null;

        $phoneNumber = $this->filterString($phoneNumber);
        $firstName = $this->filterString($firstName);
        $lastName = $this->filterString($lastName);
        $userId = $this->filterNumeric($userId);
        $vcard = $this->filterString($vcard);

        return $this->typeFactory->create($phoneNumber, $firstName, $lastName, $userId, $vcard);
    }
}
