<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UserArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageEntity;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class MessageEntityArgument extends MessageEntity implements MessageEntityArgumentInterface
{
    public function __construct(
        string $type,
        int $offset,
        int $length,
        string $url = null,
        UserArgumentInterface $user = null,
        string $language = null,
        string $customEmojiId = null
    ) {
        parent::__construct($type, $offset, $length, $url, $user, $language, $customEmojiId);
    }

    public function getUser(): UserArgumentInterface|UserInterface|null
    {
        return $this->user;
    }
}
