<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class LinkPreviewOptionsArgumentArraySerializer implements LinkPreviewOptionsArgumentArraySerializerInterface
{
    public function serialize(LinkPreviewOptionsArgumentInterface $argument): array
    {
        $data = [];

        if (!is_null($argument->isDisabled())) {
            $data[TelegramApiFieldEnum::IS_DISABLED->value] = $argument->isDisabled();
        }

        if ($argument->getUrl()) {
            $data[TelegramApiFieldEnum::URL->value] = $argument->getUrl();
        }

        if (!is_null($argument->isPreferSmallMedia())) {
            $data[TelegramApiFieldEnum::PREFER_SMALL_MEDIA->value] = $argument->isPreferSmallMedia();
        }

        if (!is_null($argument->isPreferLargeMedia())) {
            $data[TelegramApiFieldEnum::PREFER_LARGE_MEDIA->value] = $argument->isPreferLargeMedia();
        }

        if (!is_null($argument->isShowAboveText())) {
            $data[TelegramApiFieldEnum::SHOW_ABOVE_TEXT->value] = $argument->isShowAboveText();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
