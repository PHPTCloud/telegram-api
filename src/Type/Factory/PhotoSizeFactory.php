<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\PhotoSize;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\PhotoSizeFactoryInterface;

class PhotoSizeFactory implements PhotoSizeFactoryInterface
{
    public function create(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        int $fileSize,
    ): PhotoSizeInterface {
        return new PhotoSize($fileId, $fileUniqueId, $width, $height, $fileSize);
    }
}
