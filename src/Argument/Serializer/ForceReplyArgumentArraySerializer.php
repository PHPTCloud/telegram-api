<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class ForceReplyArgumentArraySerializer implements ForceReplyArgumentArraySerializerInterface
{
    public function serialize(ForceReplyArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::FORCE_REPLY->value] = $argument->isForceReply();

        if ($argument->getInputFieldPlaceholder()) {
            $data[TelegramApiFieldEnum::INPUT_FIELD_PLACEHOLDER->value] = $argument->getInputFieldPlaceholder();
        }

        if (null !== $argument->isSelective()) {
            $data[TelegramApiFieldEnum::SELECTIVE->value] = $argument->isSelective();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
