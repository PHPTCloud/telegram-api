<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService;

use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiException;
use PHPTCloud\TelegramApi\Type\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Factory\DeserializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramBotDomainService implements TelegramBotDomainServiceInterface
{
    public function __construct(
        private readonly RequestInterface                      $request,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
    ) {}

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
}
