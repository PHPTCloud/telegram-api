<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface DomainServiceInterface
{
    public function getAvailableMethods(): array;
}
