<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class User implements UserInterface
{
    public function __construct(
        protected int|float $id,
        protected ?bool $bot = null,
        protected ?string $firstName = null,
        protected ?string $lastName = null,
        protected ?string $username = null,
        protected ?string $languageCode = null,
        protected ?bool $premium = null,
        protected ?bool $addedToAttachmentMenu = null,
        protected ?bool $canJoinGroups = null,
        protected ?bool $canReadAllGroupMessages = null,
        protected ?bool $supportsInlineQueries = null,
    ) {
    }

    public function getId(): float|int
    {
        return $this->id;
    }

    public function isBot(): ?bool
    {
        return $this->bot;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function isPremium(): ?bool
    {
        return $this->premium;
    }

    public function isAddedToAttachmentMenu(): ?bool
    {
        return $this->addedToAttachmentMenu;
    }

    public function isCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    public function isCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function isSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }
}
