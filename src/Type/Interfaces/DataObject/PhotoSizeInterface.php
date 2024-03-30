<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

interface PhotoSizeInterface
{
    public function getFileId(): string;

    public function getFileUniqueId(): string;

    public function getWidth(): int;

    public function getHeight(): int;

    public function getFileSize(): ?int;
}
