<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonWebAppInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;

interface MenuButtonWebAppTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $text, WebAppInfoInterface $webApp): MenuButtonWebAppInterface;
}
