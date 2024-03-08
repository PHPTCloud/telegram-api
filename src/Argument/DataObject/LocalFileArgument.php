<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используется, если необходимо отправить файл, который расположен локально.
 * Данный файл будет обрабатываться через resource php, поэтому убедитесь в том,
 * что у php скрипта есть доступ к файлу.
 */
class LocalFileArgument implements LocalFileArgumentInterface
{
    public function __construct(
        private readonly string $filePath,
    ) {
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }

    public function getBaseName(): string
    {
        return pathinfo($this->filePath)['basename'] ?? $this->filePath;
    }
}
