<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface UserTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        int|float $id = null,
        bool $bot = null,
        string $firstName = null,
        string $lastName = null,
        string $username = null,
        string $languageCode = null,
        bool $premium = null,
        bool $addedToAttachmentMenu = null,
        bool $canJoinGroups = null,
        bool $canReadAllGroupMessages = null,
        bool $supportsInlineQueries = null,
    ): UserInterface;
}
