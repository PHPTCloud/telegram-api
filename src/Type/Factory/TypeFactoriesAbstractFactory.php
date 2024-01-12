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
}
