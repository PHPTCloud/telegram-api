<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

interface MultipartArraySerializerInterface
{
    /**
     * Преобразует входящие данные в корретный multipart массив.
     */
    public function serialize(array $parameters): array;
}
