<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatPhoto;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatPhotoInterface;

class ChatPhotoTypeFactory implements ChatPhotoTypeFactoryInterface
{
    public function create(
        string $smallFileId,
        string $smallFileUniqueId,
        string $bigFileId,
        string $bigFileUniqueId,
    ): ChatPhotoInterface {
        return new ChatPhoto($smallFileId, $smallFileUniqueId, $bigFileId, $bigFileUniqueId);
    }
}
