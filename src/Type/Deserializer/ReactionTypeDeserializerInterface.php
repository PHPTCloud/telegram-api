<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeInterface;

interface ReactionTypeDeserializerInterface
{
    public function deserialize(array $data): ReactionTypeInterface;

    /**
     * @param array[] $types
     *
     * @return ReactionTypeInterface[]
     */
    public function deserializeArrayOfTypes(array $types): array;
}
