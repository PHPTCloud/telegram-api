<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\DataObject\BotShortDescription;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotDescriptionDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotShortDescriptionDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatAdministratorRightsDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class TelegramBotDomainService implements TelegramBotDomainServiceInterface
{
    public function __construct(
        private readonly RequestInterface $request,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
    ) {
    }

    public function getMe(): UserInterface
    {
        $response = $this->request::get(TelegramApiMethodEnum::GET_ME->value);

        /** @var UserDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(UserDeserializerInterface::class);

        if (!$response->isError()) {
            return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
        }
        throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
    }

    public function logOut(): bool
    {
        $response = $this->request::post(TelegramApiMethodEnum::LOG_OUT->value);

        if (!$response->isError()) {
            return filter_var(
                $response->getResponseData()[RequestInterface::RESULT_KEY],
                FILTER_VALIDATE_BOOL,
            );
        }
        throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
    }

    public function close(): bool
    {
        $response = $this->request::post(TelegramApiMethodEnum::CLOSE->value);

        if (!$response->isError()) {
            return filter_var(
                $response->getResponseData()[RequestInterface::RESULT_KEY],
                FILTER_VALIDATE_BOOL,
            );
        }
        throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
    }

    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsArgumentInterface $argument
    ): ChatAdministratorRightsInterface {
        /** @var GetMyDefaultAdministratorRightsArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(GetMyDefaultAdministratorRightsArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::get(TelegramApiMethodEnum::GET_MY_DEFAULT_ADMINISTRATOR_RIGHTS->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var ChatAdministratorRightsDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(ChatAdministratorRightsDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRightsArgumentInterface $argument): bool
    {
        /** @var SetMyDefaultAdministratorRightsArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetMyDefaultAdministratorRightsArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        if (isset($data[TelegramApiFieldEnum::RIGHTS->value])) {
            $data[TelegramApiFieldEnum::RIGHTS->value] = json_encode($data[TelegramApiFieldEnum::RIGHTS->value]);
        }

        $response = $this->request::get(TelegramApiMethodEnum::SET_MY_DEFAULT_ADMINISTRATOR_RIGHTS->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return true;
    }

    public function getMyShortDescription(?GetMyShortDescriptionArgumentInterface $argument = null): BotShortDescriptionInterface
    {
        $data = [];
        if ($argument) {
            /** @var GetMyShortDescriptionArgumentArraySerializerInterface $serializer */
            $serializer = $this->serializersAbstractFactory->create(GetMyShortDescriptionArgumentArraySerializerInterface::class);
            $data = $serializer->serialize($argument);
        }

        $response = $this->request::get(TelegramApiMethodEnum::GET_MY_SHORT_DESCRIPTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var BotShortDescriptionDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(BotShortDescriptionDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function setMyShortDescription(?SetMyShortDescriptionArgumentInterface $argument = null): bool
    {
        $data = [];
        if ($argument) {
            /** @var SetMyShortDescriptionArgumentArraySerializerInterface $serializer */
            $serializer = $this->serializersAbstractFactory->create(SetMyShortDescriptionArgumentArraySerializerInterface::class);
            $data = $serializer->serialize($argument);
        }

        $response = $this->request::get(TelegramApiMethodEnum::SET_MY_SHORT_DESCRIPTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return true;
    }

    public function getMyDescription(?GetMyDescriptionArgumentInterface $argument = null): BotDescriptionInterface
    {
        $data = [];
        if ($argument) {
            /** @var GetMyDescriptionArgumentArraySerializerInterface $serializer */
            $serializer = $this->serializersAbstractFactory->create(GetMyDescriptionArgumentArraySerializerInterface::class);
            $data = $serializer->serialize($argument);
        }

        $response = $this->request::get(TelegramApiMethodEnum::GET_MY_DESCRIPTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var BotDescriptionDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(BotDescriptionDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }
}
