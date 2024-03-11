<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaDocumentArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaDocumentArgumentInterface $argument): array;
}
