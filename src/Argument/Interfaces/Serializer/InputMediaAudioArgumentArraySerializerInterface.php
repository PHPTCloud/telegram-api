<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaAudioArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaAudioArgumentInterface $argument): array;
}
