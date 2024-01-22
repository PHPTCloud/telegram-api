<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ReactionTypeDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ReactionTypeInterface;

    /**
     * @param array[] $types
     *
     * @return ReactionTypeInterface[]
     */
    public function deserializeArrayOfTypes(array $types): array;
}
