<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializer;
use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Factory\TypeFactoriesAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Type\Factory\UserTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class DeserializersAbstractFactory implements DeserializersAbstractFactoryInterface
{
    public function __construct(
        private readonly TypeFactoriesAbstractFactoryInterface $typeFactoriesAbstractFactory,
    ) {}

    public function create(string $type): DeserializerInterface
    {
        switch ($type) {
            case UserDeserializerInterface::class:
                return $this->createUserDeserializer();
            default:
                throw new \InvalidArgumentException(sprintf('Десериалайзер с типом "%s" не определен.', $type));
        }
    }

    public function createUserDeserializer(): UserDeserializerInterface
    {
        return new UserDeserializer($this->typeFactoriesAbstractFactory->create(UserTypeFactoryInterface::class));
    }
}
