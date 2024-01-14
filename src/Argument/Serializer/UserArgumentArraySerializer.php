<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\UserArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class UserArgumentArraySerializer implements UserArgumentArraySerializerInterface
{
    public function serialize(UserArgumentInterface $argument): array
    {
        $data = [];

        return $data;
    }
}
