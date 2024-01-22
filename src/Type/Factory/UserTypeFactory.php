<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\User;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\UserTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class UserTypeFactory implements UserTypeFactoryInterface
{
    public function create(
        float|int $id = null,
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
    ): UserInterface {
        return new User(
            $id,
            $bot,
            $firstName,
            $lastName,
            $username,
            $languageCode,
            $premium,
            $addedToAttachmentMenu,
            $canJoinGroups,
            $canReadAllGroupMessages,
            $supportsInlineQueries,
        );
    }
}
