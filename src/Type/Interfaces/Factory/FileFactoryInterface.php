<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;

interface FileFactoryInterface extends TypeFactoryInterface
{
    public function create(string $fileId, string $fileUniqueId, int $fileSize, string $filePath): FileInterface;
}
