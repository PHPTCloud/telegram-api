<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SetMyShortDescriptionArgumentArraySerializer implements SetMyShortDescriptionArgumentArraySerializerInterface
{
    public function serialize(SetMyShortDescriptionArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getShortDescription()) {
            $data[TelegramApiFieldEnum::SHORT_DESCRIPTION->value] = $argument->getShortDescription();
        }

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
