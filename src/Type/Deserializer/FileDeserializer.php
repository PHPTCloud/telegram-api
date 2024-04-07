<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\FileDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\FileFactoryInterface;

class FileDeserializer extends AbstractDeserializer implements FileDeserializerInterface
{
    public function __construct(
        private readonly FileFactoryInterface $fileFactory,
    ) {
    }

    public function deserialize(array $data): FileInterface
    {
        $fileId = $data[TelegramApiFieldEnum::FILE_ID->value] ?? null;
        $fileUniqueId = $data[TelegramApiFieldEnum::FILE_UNIQUE_ID->value] ?? null;
        $fileSize = $data[TelegramApiFieldEnum::FILE_SIZE->value] ?? null;
        $filePath = $data[TelegramApiFieldEnum::FILE_PATH->value] ?? null;

        $fileId = $this->filterString($fileId);
        $fileUniqueId = $this->filterString($fileUniqueId);
        $fileSize = $this->filterNumeric($fileSize);
        $filePath = $this->filterString($filePath);

        return $this->fileFactory->create($fileId, $fileUniqueId, $fileSize, $filePath);
    }
}
