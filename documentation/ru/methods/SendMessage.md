# Метод sendMessage

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#sendmessage

Описание:

Используйте этот метод для отправки текстовых сообщений. В случае успеха возвращается [Message](https://core.telegram.org/bots/api#message).

| Параметр               | Тип                                                                                                                                                                                                                                                                                                     | Обязательный | Описание                                                                                                                                                                                                                                                                                             |
|------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| business_connection_id | string                                                                                                                                                                                                                                                                                                  | нет          | Уникальный идентификатор бизнес-соединения, от имени которого будет отправлено сообщение.                                                                                                                                                                                                            |
| chat_id                | string/int                                                                                                                                                                                                                                                                                              | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                                                                                                                                                                                            |
| message_thread_id      | int                                                                                                                                                                                                                                                                                                     | нет          | Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.                                                                                                                                                                                                        |
| text                   | string                                                                                                                                                                                                                                                                                                  | да           | Текст отправляемого сообщения, 1-4096 символов после анализа сущностей.                                                                                                                                                                                                                              |
| parse_mode             | string                                                                                                                                                                                                                                                                                                  | нет          | Режим разбора сущностей в тексте сообщения. Дополнительные сведения см. в разделе «[Параметры форматирования](https://core.telegram.org/bots/api#formatting-options)».                                                                                                                               |
| entities               | [MessageEntity](https://core.telegram.org/bots/api#messageentity)[]                                                                                                                                                                                                                                     | нет          | Сериализованный в формате JSON список специальных сущностей, которые появляются в тексте сообщения и которые можно указать вместо parse_mode.                                                                                                                                                        |
| link_preview_options   | [LinkPreviewOptions](https://core.telegram.org/bots/api#linkpreviewoptions)                                                                                                                                                                                                                             | нет          | Параметры создания предварительного просмотра ссылки для сообщения.                                                                                                                                                                                                                                  |
| disable_notification   | bool                                                                                                                                                                                                                                                                                                    | нет          | Отправляет сообщение [молча](https://telegram.org/blog/channels-2-0#silent-messages). Пользователи получат уведомление без звука.                                                                                                                                                                    |
| protect_content        | bool                                                                                                                                                                                                                                                                                                    | нет          | Защищает содержимое отправленного сообщения от пересылки и сохранения.                                                                                                                                                                                                                               |
| reply_parameters       | [ReplyParameters](https://core.telegram.org/bots/api#replyparameters)                                                                                                                                                                                                                                   | нет          | Описание сообщения, на которое нужно ответить.                                                                                                                                                                                                                                                       |
| reply_markup           | [InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup)/[ReplyKeyboardMarkup](https://core.telegram.org/bots/api#replykeyboardmarkup)/[ReplyKeyboardRemove](https://core.telegram.org/bots/api#replykeyboardremove)/[ForceReply](https://core.telegram.org/bots/api#forcereply) | нет          | Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для встроенной клавиатуры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или принудительному ответу пользователя. Не поддерживается для сообщений, отправленных от имени бизнес-аккаунта. |

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SendMessageMethodExample.php

```php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

if (!str_starts_with(phpversion(), '8')) {
    throw new \RuntimeException('Примеры использования библиотеки не работают с PHP ниже 8 версии.');
}

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

// ########## УПРАВЛЕНИЕ INLINE КЛАВИАТУРОЙ ##########

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
$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setInlineKeyboardMarkup(
        // Можно продолжить добавлять кнопки через метод addButton
        $inlineKeyboardBuilder
        ->addButton(
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
        ->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка с WebApp',
                null,
                null,
                new \PHPTCloud\TelegramApi\Argument\DataObject\WebAppInfoArgument(
                    'https://core.telegram.org/bots/webapps',
                ),
            ),
        )
        // ->addButton(
        //     new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
        //         'Кнопка для авторизации на сайте',
        //         null,
        //         null,
        //         null,
        //         new \PHPTCloud\TelegramApi\Argument\DataObject\LoginUrlArgument(
        //             // Тут будет ошибка BotDomainInvalidException, тк нет привязки бота к вашему домену.
        //             // Для использования этой кнопки вы должны привязать бота к вашему домену.
        //             // https://core.telegram.org/bots/api#loginurl
        //             'https://google.com',
        //         ),
        //     ),
        // )
        ->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Использование Inline режима в выбранном чате',
                null,
                null,
                null,
                null,
                'Текст, который подставится в inline запрос.',
            ),
        )
        ->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Использование Inline режима в текущем чате',
                null,
                null,
                null,
                null,
                null,
                'Текст, который подставится в inline запрос.',
            ),
        )
        ->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Использование Inline режима с доп. параметрами',
                null,
                null,
                null,
                null,
                null,
                'Текст, который подставится в текущий чат.',
                new \PHPTCloud\TelegramApi\Argument\DataObject\SwitchInlineQueryChosenChatArgument(
                    'Текст, который подставится в inline запрос.',
                    null, // редиректнит в выбранный чат
                    null, // редиректнит в выбранного бота
                    null, // редиректнит в выбранную группу
                    true, // редиректнит в выбранный канал
                ),
            ),
        )
        // ->addButton(
        //     new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
        //         'Кнопка оплаты',
        //         null,
        //         null,
        //         null,
        //         null,
        //         null,
        //         null,
        //         null,
        //         // Возникнет ошибка ButtonTypeInvalidException, так как данный тип
        //         // кнопок можно вызывать только через метод sendInvoice.
        //         // https://core.telegram.org/bots/api#inlinekeyboardbutton
        //         true,
        //     ),
        // )
        ->build(),
    )
    ->build();
$result = $manager->sendMessage($message);
dump($result);

// Отправка нескольких кнопок вместе с сообщением.
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

// ########## УПРАВЛЕНИЕ ВСТРОЕННОЙ КЛАВИАТУРОЙ ##########

// Отправка кнопок под поле ввода сообщения
$replyKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\ReplyKeyboardMarkupArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('В результате должна появиться 1 кнопка под полем ввода')
    ->setReplyKeyboardMarkup(
        $replyKeyboardBuilder->setResizeKeyboard(true)
        ->setPersistent(true)
        ->setInputFieldPlaceholder('Информация будет находиться в вашем поле ввода...')
        ->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument('Кнопка 1️⃣')
        )
        ->build(),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);

// Отправка запроса на удаление кнопок под полем ввода сообщения
$replyRemoveBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\ReplyKeyboardRemoveArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('В результате "Кнопка 1" должна удалиться.')
    ->setReplyKeyboardRemove(
        $replyRemoveBuilder->wantRemoveKeyboard(true)
            ->build(),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);

// Отправка кнопок под поле ввода сообщения
// Предыдущая клавиатура будет удалена.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Отправка ForceReply')
    ->setForceReply(
        new \PHPTCloud\TelegramApi\Argument\DataObject\ForceReplyArgument(
            true,
            'Какой-то текст в плейсхолдере поля ввода сообщения.',
        ),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);

// Отправка кнопок под поле ввода сообщения
$message = $messageBuilder->setChatId($chatId)
    ->setText('В результате должны появиться 2 кнопки под полем ввода')
    ->setReplyKeyboardMarkup(
        $replyKeyboardBuilder->setResizeKeyboard(true)
            ->setPersistent(false)
            ->setInputFieldPlaceholder('Информация будет находиться в вашем поле ввода...')
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса пользователей',
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonRequestUsersArgument(
                        5,
                    )
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса только каналов',
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonRequestChatArgument(
                        4,
                        true,
                    ),
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса каналов и форумов',
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonRequestChatArgument(
                        3,
                        true,
                        true,
                    ),
                )
            )
            ->addButton(
                // Кнопка позволит отправить вашу карточку контакта в чат.
                // Также появится соответствующий Update в виде объекта Сontact.
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса контакта',
                    null,
                    null,
                    true,
                )
            )
            ->addButton(
                // Кнопка позволит отправить вашу локацию в чат.
                // Также появится соответствующий Update в виде объекта Location.
                // Функционал не будет работать если на устройстве нет соответствующих
                // устройств определения геолокации.
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса локации',
                    null,
                    null,
                    null,
                    true,
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса создания любого типа опроса',
                    null,
                    null,
                    null,
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonPollTypeArgument(),
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса создания обычного опроса',
                    null,
                    null,
                    null,
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonPollTypeArgument(
                        \PHPTCloud\TelegramApi\Type\Enums\PollTypeEnum::REGULAR->value,
                    ),
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка запроса создания опроса с правильным ответом',
                    null,
                    null,
                    null,
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonPollTypeArgument(
                        \PHPTCloud\TelegramApi\Type\Enums\PollTypeEnum::QUIZ->value,
                    ),
                )
            )
            ->addButton(
                new \PHPTCloud\TelegramApi\Argument\DataObject\KeyboardButtonArgument(
                    'Кнопка, которая откроет Web App',
                    null,
                    null,
                    null,
                    null,
                    null,
                    new \PHPTCloud\TelegramApi\Argument\DataObject\WebAppInfoArgument(
                        'https://core.telegram.org/bots/webapps',
                    ),
                )
            )
            ->build(),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);
```
