<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\WebAppInfoDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\WebAppInfoTypeFactoryInterface;

class WebAppInfoDeserializer extends AbstractDeserializer implements WebAppInfoDeserializerInterface
{
    public function __construct(
        private readonly WebAppInfoTypeFactoryInterface $webAppInfoTypeFactory,
    ) {
    }

    public function deserialize(array $data): WebAppInfoInterface
    {
        $url = $data[TelegramApiFieldEnum::URL->value] ?? null;

        $url = $this->filterString($url);

        return $this->webAppInfoTypeFactory->create($url);
    }
}
