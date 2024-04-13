<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SetMyDescriptionArgumentArraySerializer implements SetMyDescriptionArgumentArraySerializerInterface
{
    public function serialize(SetMyDescriptionArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getDescription()) {
            $data[TelegramApiFieldEnum::DESCRIPTION->value] = $argument->getDescription();
        }

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
