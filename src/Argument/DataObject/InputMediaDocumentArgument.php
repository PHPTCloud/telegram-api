<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\InputMediaTypeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InputMediaDocumentArgument extends AbstractInputMediaArgument implements InputMediaDocumentArgumentInterface
{
    public function __construct(
        LocalFileArgumentInterface|string $media,
        string $caption = null,
        array $captionEntities = null,
        string $parseMode = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?bool $disableContentTypeDetection = null,
    ) {
        $type = InputMediaTypeEnum::DOCUMENT->value;

        parent::__construct($type, $media, $caption, $captionEntities, $parseMode);
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function wantDisableContentTypeDetection(): ?bool
    {
        return $this->disableContentTypeDetection;
    }
}
