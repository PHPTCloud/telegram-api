<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeEmojiArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReactionTypeEmojiArgumentArraySerializer implements ReactionTypeEmojiArgumentArraySerializerInterface
{
    public function serialize(ReactionTypeEmojiArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::EMOJI->value] = $argument->getEmoji();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
