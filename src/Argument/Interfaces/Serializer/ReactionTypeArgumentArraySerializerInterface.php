<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReactionTypeArgumentInterface $argument): array;
}
