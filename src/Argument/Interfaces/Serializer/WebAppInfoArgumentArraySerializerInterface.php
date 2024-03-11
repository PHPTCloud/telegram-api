<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface WebAppInfoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(WebAppInfoArgumentInterface $argument): array;
}
