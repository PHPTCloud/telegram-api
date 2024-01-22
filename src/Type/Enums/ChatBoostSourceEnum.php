<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
enum ChatBoostSourceEnum: string
{
    case PREMIUM = 'premium';
    case GIFT_CODE = 'gift_code';
    case GIVEAWAY = 'giveaway';
}
