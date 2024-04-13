<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class GetMyShortDescriptionArgumentArraySerializer implements GetMyShortDescriptionArgumentArraySerializerInterface
{
    public function serialize(GetMyShortDescriptionArgumentInterface $argument): array
    {
        $data = [];

        if (null !== $argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
