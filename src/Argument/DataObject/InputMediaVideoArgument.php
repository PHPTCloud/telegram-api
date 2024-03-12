<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\InputMediaTypeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InputMediaVideoArgument extends AbstractInputMediaArgument implements InputMediaVideoArgumentInterface
{
    public function __construct(
        LocalFileArgumentInterface|string $media,
        string $caption = null,
        array $captionEntities = null,
        string $parseMode = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?bool $spoiler = null,
        private readonly ?bool $supportsStreaming = null,
        private readonly ?int $duration = null,
        private readonly ?int $width = null,
        private readonly ?int $height = null,
    ) {
        $type = InputMediaTypeEnum::VIDEO->value;

        parent::__construct($type, $media, $caption, $captionEntities, $parseMode);
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function hasSpoiler(): ?bool
    {
        return $this->spoiler;
    }

    public function isSupportsStreaming(): ?bool
    {
        return $this->supportsStreaming;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }
}
