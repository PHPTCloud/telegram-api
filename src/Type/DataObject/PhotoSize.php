<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;

class PhotoSize implements PhotoSizeInterface
{
    public function __construct(
        private readonly string $fileId,
        private readonly string $fileUniqueId,
        private readonly int $width,
        private readonly int $height,
        private readonly int $fileSize,
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

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }
}
