<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatLocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatPermissionsDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatPhotoDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\LocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ReactionTypeCustomEmojiDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ReactionTypeDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ReactionTypeEmojiDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface DeserializersAbstractFactoryInterface
{
    public function create(string $type): DeserializerInterface;

    public function createUserDeserializer(): UserDeserializerInterface;

    public function createMessageDeserializer(bool $wantCreateMessageDeserializer = true): MessageDeserializerInterface;

    /**
     * @param bool $wantCreateMessageDeserializer - флаг для того, чтобы избежать циклической зависимости между
     *                                            ChatDeserializer и MessageDeserializer
     */
    public function createChatDeserializer(bool $wantCreateMessageDeserializer = true): ChatDeserializerInterface;

    public function createChatPhotoDeserializer(): ChatPhotoDeserializerInterface;

    public function createReactionTypeDeserializer(): ReactionTypeDeserializerInterface;

    public function createReactionTypeCustomEmojiDeserializer(): ReactionTypeCustomEmojiDeserializerInterface;

    public function createReactionTypeEmojiDeserializer(): ReactionTypeEmojiDeserializerInterface;

    public function createChatPermissionsDeserializer(): ChatPermissionsDeserializerInterface;

    public function createChatLocationDeserializer(): ChatLocationDeserializerInterface;

    public function createLocationDeserializer(): LocationDeserializerInterface;
}
