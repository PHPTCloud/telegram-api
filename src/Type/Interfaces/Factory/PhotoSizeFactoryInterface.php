<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;

interface PhotoSizeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        int $fileSize,
    ): PhotoSizeInterface;
}
