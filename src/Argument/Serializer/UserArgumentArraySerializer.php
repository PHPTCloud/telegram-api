<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UserArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class UserArgumentArraySerializer implements UserArgumentArraySerializerInterface
{
    public function serialize(UserArgumentInterface $argument): array
    {
        $data = [];

        return $data;
    }
}
