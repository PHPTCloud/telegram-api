<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Реакция основана на смайлах.
 * @link    https://core.telegram.org/bots/api#reactiontypeemoji
 */
interface ReactionTypeEmojiInterface extends ReactionTypeInterface
{
    /**
     * Смайлики строковой реакции. В настоящее время это может быть одно из "👍", "👎", "❤", "🔥", "🥰", "👏"
     * "😁", "🤔", "🤯", "😱", "🤬". , "😢", "🎉", "🤩", "🤮", "💩", "🙏", "👌", "🕊", "🤡", "🥱", "🥴"
     * "😍", " 🐳", "❤‍🔥", "🌚", "🌭", "💯", "🤣", "⚡", "🍌", "🏆", "💔", "🤨", "😐", " 🍓", "🍾", "💋",
     * "🖕", "😈", "😴", "😭", "🤓", "👻", "👨‍💻", "👀", "🎃", " 🙈", "😇", "😨", "🤝", "✍", "🤗", "🫡",
     * "🎅", "🎄", "☃", "💅", "🤪", "🗿" , "🆒", "💘", "🙉", "🦄", "😘", "💊", "🙊", "😎", "👾", "🤷‍♂", "🤷"
     * "🤷‍ ♀", "😡"
     *
     * @return string
     */
    public function getEmoji(): string;
}
