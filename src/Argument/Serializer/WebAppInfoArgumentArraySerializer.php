<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class WebAppInfoArgumentArraySerializer implements WebAppInfoArgumentArraySerializerInterface
{
    public function serialize(WebAppInfoArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::URL->value] = $argument->getUrl();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
