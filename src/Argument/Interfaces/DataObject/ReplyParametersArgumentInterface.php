<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyParametersInterface;

interface ReplyParametersArgumentInterface extends ReplyParametersInterface
{
    /**
     * Необязательный. Список специальных объектов, сериализованный в формате JSON, которые появляются в ци
     * тате. Его можно указать вместо quote_parse_mode.
     *
     * @return MessageEntityArgumentInterface|null
     */
    public function getQuoteEntities(): ?array;
}
