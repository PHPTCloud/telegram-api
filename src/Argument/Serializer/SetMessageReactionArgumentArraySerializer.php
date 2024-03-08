<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMessageReactionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMessageReactionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class SetMessageReactionArgumentArraySerializer implements SetMessageReactionArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ReactionTypeArgumentArraySerializerInterface $reactionTypeArgumentArraySerializer,
    ) {
    }

    public function serialize(SetMessageReactionArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();

        if ($argument->getReaction()) {
            $data[TelegramApiFieldEnum::REACTION->value] = [];
            foreach ($argument->getReaction() as $reaction) {
                $data[TelegramApiFieldEnum::REACTION->value][]
                    = $this->reactionTypeArgumentArraySerializer->serialize($reaction);
            }
        }

        if ($argument->isBig()) {
            $data[TelegramApiFieldEnum::BIG->value] = $argument->isBig();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
