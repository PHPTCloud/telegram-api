<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * @see    https://core.telegram.org/bots/api#messageentity
 */
enum MessageEntityTypeEnum: string
{
    case MENTION = 'mention';
    case HASHTAG = 'hashtag';
    case CASHTAG = 'cashtag';
    case BOT_COMMAND = 'bot_command';
    case URL = 'url';
    case EMAIL = 'email';
    case PHONE_NUMBER = 'phone_number';
    case BOLD_TEXT = 'bold';
    case ITALIC_TEXT = 'italic';
    case UNDERLINE = 'underline';
    case STRICKETHROUGH_TEXT = 'strikethrough';
    case SPOILER_MESSAGE = 'spoiler';
    case BLOCKQUOTE = 'blockquote';
    case CODE = 'code';
    case PRE = 'pre';
    case TEXT_LINK = 'text_link';
    case TEXT_MENTION = 'text_mention';
    case CUSTOM_EMOJI = 'custom_emoji';
}
