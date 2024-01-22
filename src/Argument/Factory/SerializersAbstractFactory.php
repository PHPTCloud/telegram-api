<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatIdIdArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\LinkPreviewOptionsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageEntityArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\UserArgumentArraySerializer;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class SerializersAbstractFactory implements SerializersAbstractFactoryInterface
{
    public function create(string $type): SerializerInterface
    {
        switch ($type) {
            case MessageArgumentArraySerializerInterface::class:
            case MessageArgumentArraySerializer::class:
                return $this->createMessageArgumentArraySerializer();
            case MessageEntityArgumentArraySerializer::class:
            case MessageEntityArgumentArraySerializerInterface::class:
                return $this->createMessageEntityArgumentArraySerializer();
            case UserArgumentArraySerializer::class:
            case UserArgumentArraySerializerInterface::class:
                return $this->createUserArgumentArraySerializer();
            case LinkPreviewOptionsArgumentArraySerializer::class:
            case LinkPreviewOptionsArgumentArraySerializerInterface::class:
                return $this->createLinkPreviewOptionsArgumentArraySerializer();
            case ChatIdIdArgumentArraySerializer::class:
            case ChatIdArgumentArraySerializerInterface::class:
                return $this->createChatIdArgumentArraySerializer();
            default:
                throw new \InvalidArgumentException(sprintf('Тип %s не может быть создан данной фабрикой.', $type));
        }
    }

    public function createMessageArgumentArraySerializer(): MessageArgumentArraySerializerInterface
    {
        return new MessageArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createLinkPreviewOptionsArgumentArraySerializer(),
        );
    }

    public function createMessageEntityArgumentArraySerializer(): MessageEntityArgumentArraySerializerInterface
    {
        return new MessageEntityArgumentArraySerializer(
            $this->createUserArgumentArraySerializer(),
        );
    }

    public function createUserArgumentArraySerializer(): UserArgumentArraySerializerInterface
    {
        return new UserArgumentArraySerializer();
    }

    public function createLinkPreviewOptionsArgumentArraySerializer(): LinkPreviewOptionsArgumentArraySerializerInterface
    {
        return new LinkPreviewOptionsArgumentArraySerializer();
    }

    public function createChatIdArgumentArraySerializer(): ChatIdArgumentArraySerializerInterface
    {
        return new ChatIdIdArgumentArraySerializer();
    }
}
