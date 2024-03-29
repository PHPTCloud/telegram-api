<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPhotoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatPhotoDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatPhotoTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatPhotoDeserializer extends AbstractDeserializer implements ChatPhotoDeserializerInterface
{
    public function __construct(
        private readonly ChatPhotoTypeFactoryInterface $chatPhotoTypeFactory,
    ) {
    }

    public function deserialize(array $data): ChatPhotoInterface
    {
        $smallFileId = $data['small_file_id'] ?? null;
        $smallFileUniqueId = $data['small_file_unique_id'] ?? null;
        $bigFileId = $data['big_file_id'] ?? null;
        $bigFileUniqueId = $data['big_file_unique_id'] ?? null;

        $smallFileId = $this->filterString($smallFileId);
        $smallFileUniqueId = $this->filterString($smallFileUniqueId);
        $bigFileId = $this->filterString($bigFileId);
        $bigFileUniqueId = $this->filterString($bigFileUniqueId);

        return $this->chatPhotoTypeFactory->create(
            $smallFileId,
            $smallFileUniqueId,
            $bigFileId,
            $bigFileUniqueId,
        );
    }
}
