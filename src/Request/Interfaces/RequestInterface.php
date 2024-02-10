<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Request\Interfaces;

use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface RequestInterface
{
    public const RESULT_KEY = 'result';
    public const DESCRIPTION_KEY = 'description';

    public static function getInstance(
        TelegramBotInterface $telegramBot = null,
        ?string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): RequestInterface;

    public static function create(
        TelegramBotInterface $telegramBot,
        string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): RequestInterface;

    public static function get(string $method, array $query = [], array $headers = []): ResponseInterface;

    public static function post(
        string $method,
        array $json = null,
        array $formData = null,
        array $headers = null,
        array $multipart = null,
    ): ResponseInterface;
}
