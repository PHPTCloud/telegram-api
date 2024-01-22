<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет телефонный контакт.
 * @link    https://core.telegram.org/bots/api#contact
 */
class Contact implements ContactInterface
{
    public function __construct(
        private readonly string         $phoneNumber,
        private readonly string         $firstName,
        private readonly ?string        $lastName = null,
        private readonly null|int|float $userId = null,
        private readonly ?string        $vCard = null,
    ) {}

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getUserId(): float|int|null
    {
        return $this->userId;
    }

    public function getVCard(): ?string
    {
        return $this->vCard;
    }
}
