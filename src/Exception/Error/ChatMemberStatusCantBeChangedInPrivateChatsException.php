<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class ChatMemberStatusCantBeChangedInPrivateChatsException extends TelegramApiException
{
    public const CODE = 'ChatMemberStatusCantBeChangedInPrivateChats';
}
