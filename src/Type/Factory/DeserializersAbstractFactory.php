<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatDeserializer;
use PHPTCloud\TelegramApi\Type\Deserializer\MessageDeserializer;
use PHPTCloud\TelegramApi\Type\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializer;
use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class DeserializersAbstractFactory implements DeserializersAbstractFactoryInterface
{
    public function __construct(
        private readonly TypeFactoriesAbstractFactoryInterface $typeFactoriesAbstractFactory,
    ) {}

    public function create(string $type): DeserializerInterface
    {
        switch ($type) {
            case UserDeserializerInterface::class:
            case UserDeserializer::class:
                return $this->createUserDeserializer();
            case MessageDeserializer::class:
            case MessageDeserializerInterface::class:
                return $this->createMessageDeserializer();
            default:
                throw new \InvalidArgumentException(sprintf('Десериалайзер с типом "%s" не определен.', $type));
        }
    }

    public function createUserDeserializer(): UserDeserializerInterface
    {
        return new UserDeserializer($this->typeFactoriesAbstractFactory->create(UserTypeFactoryInterface::class));
    }

    public function createMessageDeserializer(): MessageDeserializerInterface
    {
        return new MessageDeserializer(
            $this->typeFactoriesAbstractFactory->create(MessageTypeFactoryInterface::class),
            new ChatDeserializer($this->typeFactoriesAbstractFactory->create(ChatTypeFactoryInterface::class)),
        );
    }
}
