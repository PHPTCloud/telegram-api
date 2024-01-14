<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
enum FormattingLanguagesEnum: string
{
    /**
     * @link https://core.telegram.org/bots/api#markdownv2-style
     */
    case MARKDOWN_V2 = 'MarkdownV2';

    /**
     * @link https://core.telegram.org/bots/api#html-style
     */
    case HTML = 'HTML';

    /**
     * @link https://core.telegram.org/bots/api#markdown-style
     */
    case MARKDOWN = 'Markdown';
}
