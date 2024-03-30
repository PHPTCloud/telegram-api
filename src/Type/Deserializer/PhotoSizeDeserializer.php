<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\PhotoSizeDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\PhotoSizeFactoryInterface;

class PhotoSizeDeserializer extends AbstractDeserializer implements PhotoSizeDeserializerInterface
{
    public function __construct(
        private readonly PhotoSizeFactoryInterface $photoSizeFactory,
    ) {
    }

    public function deserialize(array $data): PhotoSizeInterface
    {
        $fileId = $data[TelegramApiFieldEnum::FILE_ID->value] ?? null;
        $fileUniqueId = $data[TelegramApiFieldEnum::FILE_UNIQUE_ID->value] ?? null;
        $width = $data[TelegramApiFieldEnum::WIDTH->value] ?? null;
        $height = $data[TelegramApiFieldEnum::HEIGHT->value] ?? null;
        $fileSize = $data[TelegramApiFieldEnum::FILE_SIZE->value] ?? null;

        $fileId = $this->filterString($fileId);
        $fileUniqueId = $this->filterString($fileUniqueId);
        $width = $this->filterNumeric($width);
        $height = $this->filterNumeric($height);
        $fileSize = $this->filterNumeric($fileSize);

        return $this->photoSizeFactory->create($fileId, $fileUniqueId, $width, $height, $fileSize);
    }
}
