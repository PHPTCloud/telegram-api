<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendPhotoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SendPhotoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendPhotoArgumentInterface $argument): array;
}
