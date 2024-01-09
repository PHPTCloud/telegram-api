<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

enum ChatMemberEnum: string
{
    case CREATOR = 'creator';
    case ADMINISTRATOR = 'administrator';
    case MEMBER = 'member';
    case RESTRICTED = 'restricted';
    case LEFT = 'left';
    case KICKED = 'kicked';
}
