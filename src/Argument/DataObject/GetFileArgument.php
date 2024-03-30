<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @link    https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
 */
class GetFileArgument implements GetFileArgumentInterface
{
    public function __construct(
        private readonly string $fileId,
    ) {
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }
}
