<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\InputMediaTypeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InputMediaPhotoArgument extends AbstractInputMediaArgument implements InputMediaPhotoArgumentInterface
{
    public function __construct(
        LocalFileArgumentInterface|string $media,
        string $caption = null,
        array $captionEntities = null,
        string $parseMode = null,
        private readonly ?bool $spoiler = null,
    ) {
        $type = InputMediaTypeEnum::PHOTO->value;

        parent::__construct($type, $media, $caption, $captionEntities, $parseMode);
    }

    public function hasSpoiler(): ?bool
    {
        return $this->spoiler;
    }
}
