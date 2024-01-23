<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

// Для создания простого текстового сообщения можно не использовать MessageArgumentBuilder. Однако, что
// бы соблюдать уровень сцепления модулей рекомендую не привязываться к конкретным реализациям и исполь
// зовать билдеры и фабрики.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Простое текстовое сообщение.')
    ->build();

$result = $manager->sendMessage($message);
dump($result);

// Также можно указать parse_mode параметр для использования форматирования текста.
$message = $messageBuilder->setChatId($chatId)
    ->setText('*Жирный текст*, _курсив_, [ссылка](https://www.example.com/) и прочее...')
    ->setParseMode(PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value)
    // ->setNotificationDisabled(true)
    // ->setContentProtected(true)
    // ->setMessageThreadId(1)
    ->build();

$result = $manager->sendMessage($message);
dump($result);

// Пример отправки кода. В объекте Code автоматически происходит форматирование, но если вам не подходит этот
// метод, то можно отправить "сырой" отформатированный заранее контент в sendMessage.
$message = $messageBuilder->setChatId($chatId)
    ->setText((string)(new PHPTCloud\TelegramApi\Type\ValueObject\Code('$foo = "Код на PHP";', 'php')))
    ->setParseMode(PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value)
    ->build();

$result = $manager->sendMessage($message);
dump($result);

// Пример использования MessageEntityArgument для форматирования текста.
// @link https://core.telegram.org/bots/api#messageentity
$message = $messageBuilder->setChatId($chatId)
    ->setText('Жирный текст, обычный текст.')
    ->addEntity(new PHPTCloud\TelegramApi\Argument\DataObject\MessageEntityArgument(
        PHPTCloud\TelegramApi\Type\Enums\MessageEntityTypeEnum::BOLD_TEXT->value,
        0,
        12,
    ))
    ->build();

$result = $manager->sendMessage($message);
dump($result);

// Установка опция для пред показа ссылок
// @link https://core.telegram.org/bots/api#linkpreviewoptions
$message = $messageBuilder->setChatId($chatId)
    ->setText('LinkPreviewOptions - https://core.telegram.org/bots/api#linkpreviewoptions')
    ->setLinkPreviewOptions(
        new PHPTCloud\TelegramApi\Argument\DataObject\LinkPreviewOptionsArgument(
            true, // убираем превью у ссылки.
        ),
    )
    ->build();

$result = $manager->sendMessage($message);
dump($result);

// Цитирование и ответ на предыдущие сообщения можно производить через объект
// PHPTCloud\TelegramApi\Argument\DataObject\ReplyParametersArgument
// Для начала отправим какое-нибудь сообщение, на которое потом пришлем ответ.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Текстовое сообщение, на которое мы хотим ответить и использовать часть сообщения как цитату.')
    ->build();
$result = $manager->sendMessage($message); // @return \PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface

$messageWithQuote = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то ответ на предыдущее сообщение.')
    ->setReplyParameters(
        new PHPTCloud\TelegramApi\Argument\DataObject\ReplyParametersArgument(
            // используем ID сообщения, на которое будем ссылаться.
            $result->getMessageId(),
            // установим флаг для отправки сообщения, даже если указанное
            // сообщение, на которое нужно ответить, не найдено;
            // можно использовать только для ответов в одной и той же теме чата и форума
            true,
            // Мы можем указать целиком текст сообщения или указать его часть, например, через substr() / mb_substr().
            // Если указать quote = null, то сообщение будет укорочено, а в конце будет стоять "...".
            mb_substr($result->getText(), 0, 19),
            null,
            null,
            0,
        ),
    )
    ->build();
$result = $manager->sendMessage($messageWithQuote);
dump($result);

// Управление inline клавиатурой
// Отправка кнопки в виде ссылки
$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setInlineKeyboardMarkup(
        $inlineKeyboardBuilder->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 1',
                'https://example.com',
            ),
        )
            ->build(),
    )
    ->build();
$result = $manager->sendMessage($message);
dump($result);

// Отправка нескольких кнопок
$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setInlineKeyboardMarkup(
        // Можно продолжить добавлять кнопки через метод addButton
        $inlineKeyboardBuilder->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 1',
                'https://example.com',
            ),
        )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                    'Кнопка 2',
                    null,
                    'CALLBACK_DATA',
                ),
            )
            ->build(),
    )
    ->build();
$result = $manager->sendMessage($message);
dump($result);

// Отправка нескольких кнопок
$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setInlineKeyboardMarkup(
        // Можно сразу добавить все кнопки через addRow
        $inlineKeyboardBuilder->addRow(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 1',
                'https://example.com',
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 2',
                null,
                'CALLBACK_DATA2',
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 3',
                null,
                'CALLBACK_DATA3',
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 4',
                null,
                'CALLBACK_DATA4',
            ),
        )
        ->addRow(

            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 3',
                null,
                'CALLBACK_DATA3',
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 4',
                null,
                'CALLBACK_DATA4',
            ),
        )
        ->addRow(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 3',
                null,
                'CALLBACK_DATA3',
            ),
        )
        // Вы также можете указать максимальное количество элементов в строке,
        // тогда билдер сам преобразует добавленные кнопки в строки с указанным
        // количеством элементов.
        ->setButtonsCountPerLine(3)
        ->build(),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);
