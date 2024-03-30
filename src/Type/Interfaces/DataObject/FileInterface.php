<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

interface FileInterface
{
    public function getFileId(): string;

    public function getFileUniqueId(): string;

    public function getFileSize(): int;

    public function getFilePath(): string;
}
