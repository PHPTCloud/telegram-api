<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class ReplyParametersArgumentArraySerializer implements ReplyParametersArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
    ) {
    }

    public function serialize(ReplyParametersArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();

        if (null !== $argument->isAllowedSendingWithoutReply()) {
            $data[TelegramApiFieldEnum::ALLOW_SENDING_WITHOUT_REPLY->value] = $argument->isAllowedSendingWithoutReply();
        }

        if ($argument->getQuote()) {
            $data[TelegramApiFieldEnum::QUOTE->value] = $argument->getQuote();
        }

        if ($argument->getQuoteParseMode()) {
            $data[TelegramApiFieldEnum::QUOTE_PARSE_MODE->value] = $argument->getQuoteParseMode();
        }

        if ($argument->getQuoteEntities() && !empty($argument->getQuoteEntities())) {
            $data[TelegramApiFieldEnum::QUOTE_ENTITIES->value] = array_map(
                function (MessageEntityArgumentInterface $messageEntityArgument) {
                    return $this->messageEntityArgumentArraySerializer->serialize($messageEntityArgument);
                },
                $argument->getQuoteEntities(),
            );
        }

        if ($argument->getQuotePosition()) {
            $data[TelegramApiFieldEnum::QUOTE_POSITION->value] = $argument->getQuotePosition();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
