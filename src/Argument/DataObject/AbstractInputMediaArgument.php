<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

abstract class AbstractInputMediaArgument implements InputMediaArgumentInterface
{
    public function __construct(
        protected readonly string $type,
        protected readonly LocalFileArgumentInterface|string $media,
        protected readonly ?string $caption = null,
        protected readonly ?array $captionEntities = null,
        protected readonly ?string $parseMode = null,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMedia(): LocalFileArgumentInterface|string
    {
        return $this->media;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }
}
