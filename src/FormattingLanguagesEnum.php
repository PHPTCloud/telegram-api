<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
enum FormattingLanguagesEnum: string
{
    /**
     * @see https://core.telegram.org/bots/api#markdownv2-style
     */
    case MARKDOWN_V2 = 'MarkdownV2';

    /**
     * @see https://core.telegram.org/bots/api#html-style
     */
    case HTML = 'HTML';

    /**
     * @see https://core.telegram.org/bots/api#markdown-style
     */
    case MARKDOWN = 'Markdown';
}
