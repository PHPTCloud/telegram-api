<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPhotoInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ChatPhotoTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $smallFileId,
        string $smallFileUniqueId,
        string $bigFileId,
        string $bigFileUniqueId,
    ): ChatPhotoInterface;
}
