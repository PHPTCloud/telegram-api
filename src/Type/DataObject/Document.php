<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DocumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой общий файл (в отличие от фотографий, голосовых сообщений и аудиофайло
 * в).
 *
 * @see    https://core.telegram.org/bots/api#document
 */
class Document implements DocumentInterface
{
    public function __construct(
        private readonly string $fileId,
        private readonly string $fileUniqueId,
        private readonly ?PhotoSizeInterface $thumbnail = null,
        private readonly ?string $fileName = null,
        private readonly ?string $mimeType = null,
        private readonly null|int|float $fileSize = null,
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

    public function getThumbnail(): ?PhotoSizeInterface
    {
        return $this->thumbnail;
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
}
