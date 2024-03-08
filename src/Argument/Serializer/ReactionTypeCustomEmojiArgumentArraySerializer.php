<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeCustomEmojiArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeCustomEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReactionTypeCustomEmojiArgumentArraySerializer implements ReactionTypeCustomEmojiArgumentArraySerializerInterface
{
    public function serialize(ReactionTypeCustomEmojiArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::CUSTOM_EMOJI_ID->value] = $argument->getCustomEmojiId();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
