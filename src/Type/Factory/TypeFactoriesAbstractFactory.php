<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotDescriptionTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotShortDescriptionTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatAdministratorRightsTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatInviteLinkTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatLocationTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberAdministratorTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberBannedTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberLeftTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberMemberTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberOwnerTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberRestrictedTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatPermissionsTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatPhotoTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\FileFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\LocationTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonCommandsTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonDefaultTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonWebAppTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageIdTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\PhotoSizeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeCustomEmojiTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeEmojiTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\TypeFactoriesAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\TypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\UserTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\WebAppInfoTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class TypeFactoriesAbstractFactory implements TypeFactoriesAbstractFactoryInterface
{
    public function create(string $type): TypeFactoryInterface
    {
        switch ($type) {
            case UserTypeFactoryInterface::class:
            case UserTypeFactory::class:
                return $this->createUserTypeFactory();
            case MessageTypeFactory::class:
            case MessageTypeFactoryInterface::class:
                return $this->createMessageTypeFactory();
            case ChatTypeFactory::class:
            case ChatTypeFactoryInterface::class:
                return $this->createChatTypeFactory();
            case ChatLocationTypeFactory::class:
            case ChatLocationTypeFactoryInterface::class:
                return $this->createChatLocationTypeFactory();
            case ChatPermissionsTypeFactory::class:
            case ChatPermissionsTypeFactoryInterface::class:
                return $this->createChatPermissionsTypeFactory();
            case ChatPhotoTypeFactory::class:
            case ChatPhotoTypeFactoryInterface::class:
                return $this->createChatPhotoTypeFactory();
            case LocationTypeFactory::class:
            case LocationTypeFactoryInterface::class:
                return $this->createLocationTypeFactory();
            case ReactionTypeCustomEmojiTypeFactory::class:
            case ReactionTypeCustomEmojiTypeFactoryInterface::class:
                return $this->createReactionTypeCustomEmojiTypeFactory();
            case ReactionTypeEmojiTypeFactory::class:
            case ReactionTypeEmojiTypeFactoryInterface::class:
                return $this->createReactionTypeEmojiTypeFactory();
            case ReactionTypeTypeFactory::class:
            case ReactionTypeTypeFactoryInterface::class:
                return $this->createReactionTypeTypeFactory();
            case MessageIdTypeFactory::class:
            case MessageIdTypeFactoryInterface::class:
                return $this->createMessageIdTypeFactory();
            case ChatInviteLinkTypeFactory::class:
            case ChatInviteLinkTypeFactoryInterface::class:
                return $this->createChatInviteLinkTypeFactory();
            case ChatMemberAdministratorTypeFactory::class:
            case ChatMemberAdministratorTypeFactoryInterface::class:
                return $this->createChatMemberAdministratorTypeFactory();
            case ChatMemberLeftTypeFactory::class:
            case ChatMemberLeftTypeFactoryInterface::class:
                return $this->createChatMemberLeftTypeFactory();
            case ChatMemberMemberTypeFactory::class:
            case ChatMemberMemberTypeFactoryInterface::class:
                return $this->createChatMemberMemberTypeFactory();
            case ChatMemberOwnerTypeFactory::class:
            case ChatMemberOwnerTypeFactoryInterface::class:
                return $this->createChatMemberOwnerTypeFactory();
            case ChatMemberRestrictedTypeFactory::class:
            case ChatMemberRestrictedTypeFactoryInterface::class:
                return $this->createChatMemberRestrictedTypeFactory();
            case ChatMemberBannedTypeFactory::class:
            case ChatMemberBannedTypeFactoryInterface::class:
                return $this->createChatMemberBannedTypeFactory();
            case PhotoSizeFactory::class:
            case PhotoSizeFactoryInterface::class:
                return $this->createPhotoSizeFactory();
            case FileFactory::class:
            case FileFactoryInterface::class:
                return $this->createFileFactory();
            case ChatAdministratorRightsTypeFactory::class:
            case ChatAdministratorRightsTypeFactoryInterface::class:
                return $this->createChatAdministratorRightsTypeFactory();
            case MenuButtonCommandsTypeFactory::class:
            case MenuButtonCommandsTypeFactoryInterface::class:
                return $this->createMenuButtonCommandsTypeFactory();
            case MenuButtonDefaultTypeFactory::class:
            case MenuButtonDefaultTypeFactoryInterface::class:
                return $this->createMenuButtonDefaultTypeFactory();
            case MenuButtonWebAppTypeFactory::class:
            case MenuButtonWebAppTypeFactoryInterface::class:
                return $this->createMenuButtonWebAppTypeFactory();
            case WebAppInfoTypeFactory::class:
            case WebAppInfoTypeFactoryInterface::class:
                return $this->createWebAppInfoTypeFactory();
            case BotShortDescriptionTypeFactory::class:
            case BotShortDescriptionTypeFactoryInterface::class:
                return $this->createBotShortDescriptionTypeFactory();
            case BotDescriptionTypeFactory::class:
            case BotDescriptionTypeFactoryInterface::class:
                return $this->createBotDescriptionTypeFactory();
            default:
                throw new \InvalidArgumentException(sprintf('Фабрика с типом "%s" не определена.', $type));
        }
    }

    public function createUserTypeFactory(): UserTypeFactoryInterface
    {
        return new UserTypeFactory();
    }

    public function createMessageTypeFactory(): MessageTypeFactoryInterface
    {
        return new MessageTypeFactory();
    }

    public function createChatTypeFactory(): ChatTypeFactoryInterface
    {
        return new ChatTypeFactory();
    }

    public function createChatLocationTypeFactory(): ChatLocationTypeFactoryInterface
    {
        return new ChatLocationTypeFactory();
    }

    public function createChatPermissionsTypeFactory(): ChatPermissionsTypeFactoryInterface
    {
        return new ChatPermissionsTypeFactory();
    }

    public function createChatPhotoTypeFactory(): ChatPhotoTypeFactoryInterface
    {
        return new ChatPhotoTypeFactory();
    }

    public function createLocationTypeFactory(): LocationTypeFactoryInterface
    {
        return new LocationTypeFactory();
    }

    public function createReactionTypeCustomEmojiTypeFactory(): ReactionTypeCustomEmojiTypeFactoryInterface
    {
        return new ReactionTypeCustomEmojiTypeFactory();
    }

    public function createReactionTypeEmojiTypeFactory(): ReactionTypeEmojiTypeFactoryInterface
    {
        return new ReactionTypeEmojiTypeFactory();
    }

    public function createReactionTypeTypeFactory(): ReactionTypeTypeFactoryInterface
    {
        return new ReactionTypeTypeFactory(
            $this->createReactionTypeCustomEmojiTypeFactory(),
            $this->createReactionTypeEmojiTypeFactory(),
        );
    }

    public function createMessageIdTypeFactory(): MessageIdTypeFactoryInterface
    {
        return new MessageIdTypeFactory();
    }

    public function createChatInviteLinkTypeFactory(): ChatInviteLinkTypeFactoryInterface
    {
        return new ChatInviteLinkTypeFactory();
    }

    public function createChatMemberAdministratorTypeFactory(): ChatMemberAdministratorTypeFactoryInterface
    {
        return new ChatMemberAdministratorTypeFactory();
    }

    public function createChatMemberRestrictedTypeFactory(): ChatMemberRestrictedTypeFactoryInterface
    {
        return new ChatMemberRestrictedTypeFactory();
    }

    public function createChatMemberMemberTypeFactory(): ChatMemberMemberTypeFactoryInterface
    {
        return new ChatMemberMemberTypeFactory();
    }

    public function createChatMemberOwnerTypeFactory(): ChatMemberOwnerTypeFactoryInterface
    {
        return new ChatMemberOwnerTypeFactory();
    }

    public function createChatMemberLeftTypeFactory(): ChatMemberLeftTypeFactoryInterface
    {
        return new ChatMemberLeftTypeFactory();
    }

    public function createChatMemberBannedTypeFactory(): ChatMemberBannedTypeFactoryInterface
    {
        return new ChatMemberBannedTypeFactory();
    }

    public function createPhotoSizeFactory(): PhotoSizeFactoryInterface
    {
        return new PhotoSizeFactory();
    }

    public function createFileFactory(): FileFactoryInterface
    {
        return new FileFactory();
    }

    public function createChatAdministratorRightsTypeFactory(): ChatAdministratorRightsTypeFactoryInterface
    {
        return new ChatAdministratorRightsTypeFactory();
    }

    public function createMenuButtonCommandsTypeFactory(): MenuButtonCommandsTypeFactoryInterface
    {
        return new MenuButtonCommandsTypeFactory();
    }

    public function createMenuButtonDefaultTypeFactory(): MenuButtonDefaultTypeFactoryInterface
    {
        return new MenuButtonDefaultTypeFactory();
    }

    public function createMenuButtonWebAppTypeFactory(): MenuButtonWebAppTypeFactoryInterface
    {
        return new MenuButtonWebAppTypeFactory();
    }

    public function createWebAppInfoTypeFactory(): WebAppInfoTypeFactoryInterface
    {
        return new WebAppInfoTypeFactory();
    }

    public function createBotShortDescriptionTypeFactory(): BotShortDescriptionTypeFactoryInterface
    {
        return new BotShortDescriptionTypeFactory();
    }

    public function createBotDescriptionTypeFactory(): BotDescriptionTypeFactoryInterface
    {
        return new BotDescriptionTypeFactory();
    }
}
