<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;

class File implements FileInterface
{
    public function __construct(
        private readonly string $fileId,
        private readonly string $fileUniqueId,
        private readonly int $fileSize,
        private readonly string $filePath,
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

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
