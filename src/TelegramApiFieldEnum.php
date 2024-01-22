<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
enum TelegramApiFieldEnum: string
{
    case CHAT_ID = 'chat_id';
    case MESSAGE_THREAD_ID = 'message_thread_id';
    case TEXT = 'text';
    case PARSE_MODE = 'parse_mode';
    case ENTITIES = 'entities';
    case LINK_PREVIEW_OPTIONS = 'link_preview_options';
    case DISABLE_NOTIFICATION = 'disable_notification';
    case PROTECT_CONTENT = 'protect_content';
    case REPLY_PARAMETERS = 'reply_parameters';
    case REPLY_MARKUP = 'reply_markup';
    case FROM = 'from';
    case MESSAGE_ID = 'message_id';
    case SENDER_CHAT = 'sender_chat';
    case DATE = 'date';
    case CHAT = 'chat';
    case ID = 'id';
    case TYPE = 'type';
    case TITLE = 'title';
    case USERNAME = 'username';
    case FIRST_NAME = 'first_name';
    case LAST_NAME = 'last_name';
    case IS_FORUM = 'is_forum';
    case PHOTO = 'photo';
    case ACTIVE_USERNAMES = 'active_usernames';
    case AVAILABLE_REACTIONS = 'available_reactions';
    case ACCENT_COLOR_ID = 'accent_color_id';
    case BACKGROUND_CUSTOM_EMOJI_ID = 'background_custom_emoji_id';
    case PROFILE_ACCENT_COLOR_ID = 'profile_accent_color_id';
    case PROFILE_BACKGROUND_CUSTOM_EMOJI_ID = 'profile_background_custom_emoji_id';
    case EMOJI_STATUS_CUSTOM_EMOJI_ID = 'emoji_status_custom_emoji_id';
    case EMOJI_STATUS_EXPIRATION_DATE = 'emoji_status_expiration_date';
    case BIO = 'bio';
    case HAS_PRIVATE_FORWARDS = 'has_private_forwards';
    case HAS_RESTRICTED_VOICE_AND_VIDEO_MESSAGES = 'has_restricted_voice_and_video_messages';
    case JOIN_TO_SEND_MESSAGES = 'join_to_send_messages';
    case JOIN_BY_REQUEST = 'join_by_request';
    case DESCRIPTION = 'description';
    case INVITE_LINK = 'invite_link';
    case PINNED_MESSAGE = 'pinned_message';
    case PERMISSIONS = 'permissions';
    case SLOW_MODE_DELAY = 'slow_mode_delay';
    case MESSAGE_AUTO_DELETE_TIME = 'message_auto_delete_time';
    case HAS_AGGRESSIVE_ANTI_SPAM_ENABLED = 'has_aggressive_anti_spam_enabled';
    case HAS_HIDDEN_MEMBERS = 'has_hidden_members';
    case HAS_PROTECTED_CONTENT = 'has_protected_content';
    case HAS_VISIBLE_HISTORY = 'has_visible_history';
    case STICKER_SET_NAME = 'sticker_set_name';
    case CAN_SET_STICKER_SET = 'can_set_sticker_set';
    case LINKED_CHAT_ID = 'linked_chat_id';
    case LOCATION = 'location';
    case EMOJI = 'emoji';
    case CUSTOM_EMOJI_ID = 'custom_emoji_id';
    case CAN_SEND_MESSAGES = 'can_send_messages';
    case CAN_SEND_AUDIOS = 'can_send_audios';
    case CAN_SEND_DOCUMENTS = 'can_send_documents';
    case CAN_SEND_PHOTOS = 'can_send_photos';
    case CAN_SEND_VIDEOS = 'can_send_videos';
    case CAN_SEND_VIDEO_NOTES = 'can_send_video_notes';
    case CAN_SEND_VOICE_NOTES = 'can_send_voice_notes';
    case CAN_SEND_POLLS = 'can_send_polls';
    case CAN_SEND_OTHER_MESSAGES = 'can_send_other_messages';
    case CAN_ADD_WEB_PAGE_PREVIEWS = 'can_add_web_page_previews';
    case CAN_CHANGE_INFO = 'can_change_info';
    case CAN_INVITE_USERS = 'can_invite_users';
    case CAN_PIN_MESSAGES = 'can_pin_messages';
    case CAN_MANAGE_TOPICS = 'can_manage_topics';
    case LONGITUDE = 'longitude';
    case LATITUDE = 'latitude';
    case HORIZONTAL_ACCURACY = 'horizontal_accuracy';
    case LIVE_PERIOD = 'live_period';
    case HEADING = 'heading';
    case PROXIMITY_ALERT_RADIUS = 'proximity_alert_radius';
    case ADDRESS = 'address';
    case OFFSET = 'offset';
    case LENGTH = 'length';
    case URL = 'url';
    case USER = 'user';
    case LANGUAGE = 'language';
    case IS_DISABLED = 'is_disabled';
    case PREFER_SMALL_MEDIA = 'prefer_small_media';
    case PREFER_LARGE_MEDIA = 'prefer_large_media';
    case SHOW_ABOVE_TEXT= 'show_above_text';
}