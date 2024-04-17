<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\Contact;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ContactTypeFactoryInterface;

class ContactTypeFactory implements ContactTypeFactoryInterface
{
    public function create(
        string $phoneNumber,
        string $firstName,
        ?string $lastName = null,
        int|float|null $userId = null,
        ?string $vcard = null,
    ): ContactInterface {
        return new Contact($phoneNumber, $firstName, $lastName, $userId, $vcard);
    }
}
