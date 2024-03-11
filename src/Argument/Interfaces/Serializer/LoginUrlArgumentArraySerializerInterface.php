<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LoginUrlArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface LoginUrlArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(LoginUrlArgumentInterface $argument): array;
}
