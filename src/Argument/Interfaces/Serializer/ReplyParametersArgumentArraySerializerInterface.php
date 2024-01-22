<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ReplyParametersArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReplyParametersArgumentInterface $argument): array;
}
