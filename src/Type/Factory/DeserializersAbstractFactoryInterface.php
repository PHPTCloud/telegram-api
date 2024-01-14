<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatLocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatPermissionsDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatPhotoDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\LocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ReactionTypeCustomEmojiDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ReactionTypeDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\ReactionTypeEmojiDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface DeserializersAbstractFactoryInterface
{
    public function create(string $type): DeserializerInterface;

    public function createUserDeserializer(): UserDeserializerInterface;

    public function createMessageDeserializer(bool $wantCreateMessageDeserializer = true): MessageDeserializerInterface;

    /**
     * @param bool $wantCreateMessageDeserializer - флаг для того, чтобы избежать циклической зависимости между
     *                                            ChatDeserializer и MessageDeserializer.
     *
     * @return ChatDeserializerInterface
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
