<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetFileArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @link    https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
 */
class GetFileArgumentArraySerializer implements GetFileArgumentArraySerializerInterface
{
    public function serialize(GetFileArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::FILE_ID->value] = $argument->getFileId();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
