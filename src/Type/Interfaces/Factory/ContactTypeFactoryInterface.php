<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;

interface ContactTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $phoneNumber,
        string $firstName,
        string $lastName = null,
        int|float $userId = null,
        string $vcard = null,
    ): ContactInterface;
}
