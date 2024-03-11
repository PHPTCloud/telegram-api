<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface MultipartArraySerializerInterface
{
    /**
     * Преобразует входящие данные в корретный multipart массив.
     */
    public function serialize(array $parameters): array;
}
