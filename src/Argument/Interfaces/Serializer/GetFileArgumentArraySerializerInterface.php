<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @link    https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
 */
interface GetFileArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetFileArgumentInterface $argument): array;
}
