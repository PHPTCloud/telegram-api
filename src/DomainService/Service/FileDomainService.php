<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetFileArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\FileDomainServiceInterface;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\FileDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author Юдов Алексей tcloud.ax@gmail.com
 */
class FileDomainService implements FileDomainServiceInterface
{
    public function __construct(
        private readonly RequestInterface $request,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
    ) {
    }

    public function getFile(GetFileArgumentInterface $argument): FileInterface
    {
        /** @var GetFileArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(GetFileArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::get(TelegramApiMethodEnum::GET_FILE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var FileDeserializerInterface $deserialize */
        $deserialize = $this->deserializersAbstractFactory->create(FileDeserializerInterface::class);

        return $deserialize->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }
}
