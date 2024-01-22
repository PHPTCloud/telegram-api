<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Реакция основана на смайлах.
 *
 * @see    https://core.telegram.org/bots/api#reactiontypeemoji
 */
interface ReactionTypeEmojiInterface extends ReactionTypeInterface
{
    /**
     * Смайлики строковой реакции. В настоящее время это может быть одно из "👍", "👎", "❤", "🔥", "🥰", "👏"
     * "😁", "🤔", "🤯", "😱", "🤬". , "😢", "🎉", "🤩", "🤮", "💩", "🙏", "👌", "🕊", "🤡", "🥱", "🥴"
     * "😍", " 🐳", "❤‍🔥", "🌚", "🌭", "💯", "🤣", "⚡", "🍌", "🏆", "💔", "🤨", "😐", " 🍓", "🍾", "💋",
     * "🖕", "😈", "😴", "😭", "🤓", "👻", "👨‍💻", "👀", "🎃", " 🙈", "😇", "😨", "🤝", "✍", "🤗", "🫡",
     * "🎅", "🎄", "☃", "💅", "🤪", "🗿" , "🆒", "💘", "🙉", "🦄", "😘", "💊", "🙊", "😎", "👾", "🤷‍♂", "🤷"
     * "🤷‍ ♀", "😡".
     */
    public function getEmoji(): string;
}
