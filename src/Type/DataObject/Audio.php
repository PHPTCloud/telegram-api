<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AudioInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой аудиофайл, который клиенты Telegram будут рассматривать как музыку.
 *
 * @see    https://core.telegram.org/bots/api#audio
 */
class Audio implements AudioInterface
{
    public function __construct(
        private readonly string $fileId,
        private readonly string $fileUniqueId,
        private readonly int $duration,
        private readonly ?string $performer = null,
        private readonly ?string $title = null,
        private readonly ?string $fileName = null,
        private readonly ?string $mimeType = null,
        private readonly null|int|float $fileSize = null,
        private readonly ?PhotoSizeInterface $thumbnail = null,
    ) {
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getFileSize(): float|int|null
    {
        return $this->fileSize;
    }

    public function getThumbnail(): ?PhotoSizeInterface
    {
        return $this->thumbnail;
    }
}
