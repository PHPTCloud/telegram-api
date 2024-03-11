<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LoginUrlArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LoginUrlArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class LoginUrlArgumentArraySerializer implements LoginUrlArgumentArraySerializerInterface
{
    public function serialize(LoginUrlArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::URL->value] = $argument->getUrl();

        if ($argument->getForwardText()) {
            $data[TelegramApiFieldEnum::FORWARD_TEXT->value] = $argument->getForwardText();
        }

        if ($argument->getBotUsername()) {
            $data[TelegramApiFieldEnum::BOT_USERNAME->value] = $argument->getBotUsername();
        }

        if (null !== $argument->wantRequestWriteAccess()) {
            $data[TelegramApiFieldEnum::REQUEST_WRITE_ACCESS->value] = $argument->wantRequestWriteAccess();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
