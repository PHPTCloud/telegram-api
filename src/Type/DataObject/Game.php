<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AnimationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GameInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет игру. Используйте BotFather для создания и редактирования игр, их короткие
 * имена будут выступать в качестве уникальных идентификаторов.
 * @link    https://core.telegram.org/bots/api#forumtopicreopened
 */
class Game implements GameInterface
{
    public function __construct(
        private readonly string              $title,
        private readonly string              $description,
        private readonly array               $photo,
        private readonly ?string             $text,
        private readonly ?array              $textEntities = null,
        private readonly ?AnimationInterface $animation = null,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): array
    {
        return $this->photo;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    public function getAnimation(): ?AnimationInterface
    {
        return $this->animation;
    }
}
