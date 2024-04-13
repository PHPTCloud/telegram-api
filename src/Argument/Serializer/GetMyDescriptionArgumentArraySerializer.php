<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class GetMyDescriptionArgumentArraySerializer implements GetMyDescriptionArgumentArraySerializerInterface
{
    public function serialize(GetMyDescriptionArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
