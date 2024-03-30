<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/responses/PhotoSizeType.md
 */
interface PhotoSizeInterface
{
    public function getFileId(): string;

    public function getFileUniqueId(): string;

    public function getWidth(): int;

    public function getHeight(): int;

    public function getFileSize(): ?int;
}
