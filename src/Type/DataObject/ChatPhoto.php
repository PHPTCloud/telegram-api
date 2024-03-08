<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPhotoInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой фотографию чата.
 *
 * @see    https://core.telegram.org/bots/api#chatphoto
 */
class ChatPhoto implements ChatPhotoInterface
{
    public function __construct(
        private readonly string $smallFileId,
        private readonly string $smallFileUniqueId,
        private readonly string $bigFileId,
        private readonly string $bigFileUniqueId,
    ) {
    }

    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }
}
