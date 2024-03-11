<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAnimationArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SendAnimationArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendAnimationArgumentInterface $argument): array;
}
