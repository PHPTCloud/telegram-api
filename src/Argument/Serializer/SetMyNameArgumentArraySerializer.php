<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyNameArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SetMyNameArgumentArraySerializer implements SetMyNameArgumentArraySerializerInterface
{
    public function serialize(SetMyNameArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getName()) {
            $data[TelegramApiFieldEnum::NAME->value] = $argument->getName();
        }

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
