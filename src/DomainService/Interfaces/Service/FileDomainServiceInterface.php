<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;

/**
 * @author Юдов Алексей tcloud.ax@gmail.com
 */
interface FileDomainServiceInterface extends DomainServiceInterface
{
    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
     */
    public function getFile(GetFileArgumentInterface $argument): FileInterface;
}
