<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

enum ChatBoostSourceEnum: string
{
    case PREMIUM = 'premium';
    case GIFT_CODE = 'gift_code';
    case GIVEAWAY = 'giveaway';
}
