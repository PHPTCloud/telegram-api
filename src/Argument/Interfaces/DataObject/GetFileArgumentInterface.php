<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @see    https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
 */
interface GetFileArgumentInterface extends ArgumentInterface
{
    /**
     * Идентификатор файла, о котором нужно получить информацию.
     */
    public function getFileId(): string;
}
