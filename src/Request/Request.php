<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use PHPTCloud\TelegramApi\Request\Factory\ResponseFactory;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\ResponseInterface;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class Request implements RequestInterface
{
    private static ?RequestInterface $instance = null;
    private static Client $client;
    private static string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST;
    private static TelegramBotInterface $telegramBot;
    private static ResponseFactoryInterface $responseFactory;

    private function __construct(string $host, TelegramBotInterface $telegramBot)
    {
        self::$host = $host;
        self::$telegramBot = $telegramBot;

        self::$client = new Client(['base_uri' => $host]);
        self::$responseFactory = new ResponseFactory();
    }

    public static function getInstance(
        TelegramBotInterface $telegramBot = null,
        ?string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): RequestInterface {
        if (null === self::$instance) {
            if (null === $host || null === $telegramBot) {
                throw new \InvalidArgumentException('Нельзя создать экземпляр класса без обязательных аргументов.');
            }

            self::$instance = new Request($host, $telegramBot);
        }

        return self::$instance;
    }

    public static function create(
        TelegramBotInterface $telegramBot,
        string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): RequestInterface {
        return self::getInstance($telegramBot, $host);
    }

    public static function get(string $method, array $query = [], array $headers = []): ResponseInterface
    {
        try {
            $url = self::buildUrl(self::$host, self::$telegramBot->getToken(), $method, $query);
            $response = self::$client->get($url);

            if (200 !== $response->getStatusCode()) {
                return self::createErrorResponse($response->getStatusCode(), '', $response->getHeaders());
            }

            $responseData = json_decode($response->getBody()->getContents(), true);

            return self::$responseFactory->create($response->getHeaders(), $responseData, $response->getStatusCode());
        } catch (ClientException $exception) {
            $responseData = json_decode($exception->getResponse()->getBody()->getContents(), true);

            return self::$responseFactory->create(
                $exception->getResponse()->getHeaders(),
                $responseData,
                $exception->getResponse()->getStatusCode(),
                $responseData[RequestInterface::DESCRIPTION_KEY] ?? null,
            );
        } catch (\Throwable $exception) {
            return self::createErrorResponse($exception->getCode(), $exception->getMessage());
        }
    }

    public static function post(
        string $method,
        array $json = null,
        array $formData = null,
        array $headers = null,
        array $multipart = null,
    ): ResponseInterface {
        try {
            $url = self::buildUrl(self::$host, self::$telegramBot->getToken(), $method);
            $options = [];

            if ($headers) {
                $options[RequestOptions::HEADERS] = $headers;
            }
            if ($json) {
                $options[RequestOptions::JSON] = $json;
            }
            if ($formData) {
                $options[RequestOptions::FORM_PARAMS] = $formData;
            }
            if ($multipart) {
                $options[RequestOptions::MULTIPART] = $multipart;
            }

            $response = self::$client->post($url, $options);

            if (200 !== $response->getStatusCode()) {
                return self::createErrorResponse($response->getStatusCode(), '', $response->getHeaders());
            }

            $responseData = json_decode($response->getBody()->getContents(), true);

            return self::$responseFactory->create($response->getHeaders(), $responseData, $response->getStatusCode());
        } catch (ClientException $exception) {
            $responseData = json_decode($exception->getResponse()->getBody()->getContents(), true);

            return self::$responseFactory->create(
                $exception->getResponse()->getHeaders(),
                $responseData,
                $exception->getResponse()->getStatusCode(),
                $responseData[RequestInterface::DESCRIPTION_KEY] ?? null,
            );
        } catch (\Throwable $exception) {
            return self::createErrorResponse($exception->getCode(), $exception->getMessage());
        }
    }

    private static function createErrorResponse(
        int $code,
        string $message,
        array $headers = [],
    ): ResponseInterface {
        return self::$responseFactory->create(
            headers: $headers,
            code: $code,
            errorMessage: $message,
        );
    }

    private static function buildUrl(string $host, string $token, string $method, array $query = []): string
    {
        return sprintf('%s/bot%s/%s?%s', $host, $token, $method, http_build_query($query));
    }

    private function __clone()
    {
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception();
    }
}
