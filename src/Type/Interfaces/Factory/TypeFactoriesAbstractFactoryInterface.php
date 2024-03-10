<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TypeFactoriesAbstractFactoryInterface
{
    public function create(string $type): TypeFactoryInterface;
}
