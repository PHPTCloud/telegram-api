<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaVideoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaVideoArgumentInterface $argument): array;
}
