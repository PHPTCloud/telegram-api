<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Traits;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MultipartArraySerializerInterface;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;
use PHPTCloud\TelegramApi\SerializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @see \PHPTCloud\TelegramApi\DomainService\Interfaces\Service\SupportsSendingMultipartInterface
 */
trait SupportsSendingMultipartTrait
{
    private readonly RequestInterface $request;
    private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory;
    private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory;
    private readonly MultipartArraySerializerInterface $multipartArraySerializer;

    public function sendMultipart(
        SerializerInterface $serializer,
        ArgumentInterface $argument,
        string $method,
    ): ResponseInterface {
        $data = $serializer->serialize($argument);
        $multipart = $this->multipartArraySerializer->serialize($data);

        $response = $this->request::post(method: $method, multipart: $multipart);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response;
    }
}
