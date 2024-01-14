<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
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
}
