<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
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
    case SHOW_ABOVE_TEXT = 'show_above_text';
    case ALLOW_SENDING_WITHOUT_REPLY = 'allow_sending_without_reply';
    case QUOTE = 'quote';
    case QUOTE_PARSE_MODE = 'quote_parse_mode';
    case QUOTE_ENTITIES = 'quote_entities';
    case QUOTE_POSITION = 'quote_position';
    case INLINE_KEYBOARD = 'inline_keyboard';
    case CALLBACK_DATA = 'callback_data';
    case WEB_APP = 'web_app';
    case LOGIN_URL = 'login_url';
    case SWITCH_INLINE_QUERY = 'switch_inline_query';
    case SWITCH_INLINE_QUERY_CURRENT_CHAT = 'switch_inline_query_current_chat';
    case SWITCH_INLINE_QUERY_CHOSEN_CHAT = 'switch_inline_query_chosen_chat';
    case CALLBACK_GAME = 'callback_game';
    case PAY = 'pay';
    case REMOVE_KEYBOARD = 'remove_keyboard';
    case SELECTIVE = 'selective';
    case KEYBOARD = 'keyboard';
    case IS_PERSISTENT = 'is_persistent';
    case RESIZE_KEYBOARD = 'resize_keyboard';
    case ONE_TIME_KEYBOARD = 'one_time_keyboard';
    case INPUT_FIELD_PLACEHOLDER = 'input_field_placeholder';
    case REQUEST_USERS = 'request_users';
    case REQUEST_CHAT = 'request_chat';
    case REQUEST_CONTACT = 'request_contact';
    case REQUEST_LOCATION = 'request_location';
    case REQUEST_POLL = 'request_poll';
    case REQUEST_ID = 'request_id';
    case USER_IS_BOT = 'user_is_bot';
    case USER_IS_PREMIUM = 'user_is_premium';
    case MAX_QUANTITY = 'max_quantity';
    case CHAT_IS_CHANNEL = 'chat_is_channel';
    case CHAT_IS_FORUM = 'chat_is_forum';
    case CHAT_HAS_USERNAME = 'chat_has_username';
    case CHAT_IS_CREATED = 'chat_is_created';
    case USER_ADMINISTRATOR_RIGHTS = 'user_administrator_rights';
    case BOT_ADMINISTRATOR_RIGHTS = 'bot_administrator_rights';
    case BOT_IS_MEMBER = 'bot_is_member';
    case IS_ANONYMOUS = 'is_anonymous';
    case CAN_MANAGE_CHAT = 'can_manage_chat';
    case CAN_DELETE_MESSAGES = 'can_delete_messages';
    case CAN_MANAGE_VIDEO_CHATS = 'can_manage_video_chats';
    case CAN_RESTRICT_MEMBERS = 'can_restrict_members';
    case CAN_PROMOTE_MEMBERS = 'can_promote_members';
    case CAN_POST_MESSAGES = 'can_post_messages';
    case CAN_EDIT_MESSAGES = 'can_edit_messages';
    case CAN_POST_STORIES = 'can_post_stories';
    case CAN_EDIT_STORIES = 'can_edit_stories';
    case CAN_DELETE_STORIES = 'can_delete_stories';
    case FORWARD_TEXT = 'forward_text';
    case BOT_USERNAME = 'bot_username';
    case REQUEST_WRITE_ACCESS = 'request_write_access';
    case QUERY = 'query';
    case ALLOW_USER_CHATS = 'allow_user_chats';
    case ALLOW_BOT_CHATS = 'allow_bot_chats';
    case ALLOW_GROUP_CHATS = 'allow_group_chats';
    case ALLOW_CHANNEL_CHATS = 'allow_channel_chats';
    case FORCE_REPLY = 'force_reply';
    case FROM_CHAT_ID = 'from_chat_id';
    case MESSAGE_IDS = 'message_ids';
    case CAPTION = 'caption';
    case CAPTION_ENTITIES = 'caption_entities';
    case REMOVE_CAPTION = 'remove_caption';
    case HAS_SPOILER = 'has_spoiler';
    case AUDIO = 'audio';
    case DURATION = 'duration';
    case PERFORMER = 'performer';
    case THUMBNAIL = 'thumbnail';
    case DISABLE_CONTENT_TYPE_DETECTION = 'disable_content_type_detection';
    case DOCUMENT = 'document';
    case ACTION = 'action';
    case VIDEO = 'video';
    case WIDTH = 'width';
    case HEIGHT = 'height';
    case SUPPORTS_STREAMING = 'supports_streaming';
    case ANIMATION = 'animation';
    case VOICE = 'voice';
    case VIDEO_NOTE = 'video_note';
    case MEDIA = 'media';
    case BIG = 'big';
    case REACTION = 'reaction';
    case UNTIL_DATE = 'until_date';
    case REVOKE_MESSAGES = 'revoke_messages';
    case USER_ID = 'user_id';
    case ONLY_IF_BANNED = 'only_if_banned';
    case CUSTOM_TITLE = 'custom_title';
    case CREATOR = 'creator';
    case CREATES_JOIN_REQUEST = 'creates_join_request';
    case IS_PRIMARY = 'is_primary';
    case IS_REVOKED = 'is_revoked';
    case NAME = 'name';
    case EXPIRE_DATE = 'expire_date';
    case MEMBER_LIMIT = 'member_limit';
    case PENDING_JOIN_REQUEST_COUNT = 'pending_join_request_count';
    case STATUS = 'status';
    case IS_MEMBER = 'is_member';
    case CAN_BE_EDITED = 'can_be_edited';
    case FILE_ID = 'file_id';
    case FILE_UNIQUE_ID = 'file_unique_id';
    case FILE_SIZE = 'file_size';
    case FILE_PATH = 'file_path';
    case INLINE_MESSAGE_ID = 'inline_message_id';
    case FOR_CHANNELS = 'for_channels';
    case RIGHTS = 'rights';
}
