<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\File;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\FileFactoryInterface;

class FileFactory implements FileFactoryInterface
{
    public function create(string $fileId, string $fileUniqueId, int $fileSize, string $filePath): FileInterface
    {
        return new File($fileId, $fileUniqueId, $fileSize, $filePath);
    }
}
