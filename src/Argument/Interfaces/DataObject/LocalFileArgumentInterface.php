<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используется, если необходимо отправить файл, который расположен локально.
 * Данный файл будет обрабатываться через resource php, поэтому убедитесь в том,
 * что у php скрипта есть доступ к файлу.
 */
interface LocalFileArgumentInterface
{
    public function getFilePath(): string;
}
