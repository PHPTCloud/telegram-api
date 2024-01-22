<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TypeFactoriesAbstractFactoryInterface
{
    public function create(string $type): TypeFactoryInterface;
}
