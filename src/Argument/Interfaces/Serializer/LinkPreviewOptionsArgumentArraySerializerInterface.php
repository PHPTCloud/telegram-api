<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface LinkPreviewOptionsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(LinkPreviewOptionsArgumentInterface $argument): array;
}
