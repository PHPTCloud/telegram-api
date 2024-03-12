<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\InputMediaTypeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InputMediaAudioArgument extends AbstractInputMediaArgument implements InputMediaAudioArgumentInterface
{
    public function __construct(
        LocalFileArgumentInterface|string $media,
        string $caption = null,
        array $captionEntities = null,
        string $parseMode = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?int $duration = null,
        private readonly ?string $performer = null,
        private readonly ?string $title = null,
    ) {
        $type = InputMediaTypeEnum::AUDIO->value;

        parent::__construct($type, $media, $caption, $captionEntities, $parseMode);
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
