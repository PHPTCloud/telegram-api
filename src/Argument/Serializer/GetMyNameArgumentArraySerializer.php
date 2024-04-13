<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyNameArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class GetMyNameArgumentArraySerializer implements GetMyNameArgumentArraySerializerInterface
{
    public function serialize(GetMyNameArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
