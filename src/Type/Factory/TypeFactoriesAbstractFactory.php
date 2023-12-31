<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TypeFactoriesAbstractFactory implements TypeFactoriesAbstractFactoryInterface
{
    public function create(string $type): TypeFactoryInterface
    {
        switch ($type) {
            case UserTypeFactoryInterface::class:
                return $this->createUserTypeFactory();
            default:
                throw new \InvalidArgumentException(sprintf('Фабрика с типом "%s" не определена.', $type));
        }
    }

    public function createUserTypeFactory(): UserTypeFactoryInterface
    {
        return new UserTypeFactory();
    }
}
