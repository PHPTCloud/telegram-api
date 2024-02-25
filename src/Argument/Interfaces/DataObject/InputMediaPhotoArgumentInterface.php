<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface InputMediaPhotoArgumentInterface extends InputMediaArgumentInterface
{
    /**
     * Передайте True, если фотография должна быть покрыта анимацией спойлера.
     */
    public function hasSpoiler(): ?bool;
}
