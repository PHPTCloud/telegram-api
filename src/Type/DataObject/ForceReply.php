<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForceReplyInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * При получении сообщения с этим объектом клиенты Telegram отобразят пользователю интерфейс ответа (де
 * йствуйте так, как будто пользователь выбрал сообщение бота и нажал «Ответить»). Это может быть чрезв
 * ычайно полезно, если вы хотите создать удобные для пользователя пошаговые интерфейсы, не жертвуя реж
 * имом конфиденциальности.
 *
 * @see     https://core.telegram.org/bots/api#forcereply
 */
class ForceReply implements ForceReplyInterface
{
    public function __construct(
        private readonly bool $forceReply = true,
        private readonly ?string $inputFieldPlaceholder = null,
        private readonly ?bool $selective = null,
    ) {
    }

    public function isForceReply(): bool
    {
        return $this->forceReply;
    }

    public function getInputFieldPlaceholder(): ?string
    {
        return $this->inputFieldPlaceholder;
    }

    public function isSelective(): ?bool
    {
        return $this->selective;
    }
}
