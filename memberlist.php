<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* Vietnamese language pack <giaminhteam@gmail.com>
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Cá nhân',
	'ACTIVE_IN_FORUM'		=> 'Diễn đàn mới hoạt động',
	'ACTIVE_IN_TOPIC'		=> 'Bài viết mới hoạt động',
	'ADD_FOE'				=> 'Add foe',
	'ADD_FRIEND'			=> 'Thêm bạn bè',
	'AFTER'					=> 'After',

	'ALL'					=> 'Tất cả',

	'BEFORE'				=> 'Before',

	'CC_SENDER'				=> 'Gửi bản copy qua email.',
	'CONTACT_ADMIN'			=> 'Liên hệ Ban Quản Trị',

	'DEST_LANG'				=> 'Ngôn ngữ',
	'DEST_LANG_EXPLAIN'		=> 'Lựa chọn ngôn ngữ để gửi liên hệ.',

	'EDIT_PROFILE'			=> 'Sửa thông tin cá nhân',

	'EMAIL_BODY_EXPLAIN'	=> 'Nhập nội dung liên hệ tại đây. BBCode hay HTML đều không được phép',
	'EMAIL_DISABLED'		=> 'Sorry but all email related functions have been disabled.',
	'EMAIL_SENT'			=> 'Liên hệ của bạn đã được gửi. Chúng tôi sẽ liên hệ lại trong thời gian ngắn nhất.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid email address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'You must enter a message to be emailed.',
	'EMPTY_MESSAGE_IM'		=> 'You must enter a message to be send.',
	'EMPTY_NAME_EMAIL'		=> 'You must enter the real name of the recipient.',
	'EMPTY_SENDER_EMAIL'	=> 'You must provide a valid email address.',
	'EMPTY_SENDER_NAME'		=> 'You must provide a name.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the email.',
	'EQUAL_TO'				=> 'Equal to',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another email at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Trưởng nhóm',

	'HIDE_MEMBER_SEARCH'	=> 'Hide member search',

	'IM_ADD_CONTACT'		=> 'Thêm liên hệ',
	'IM_DOWNLOAD_APP'		=> 'Download application',
	'IM_JABBER'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'		=> 'This is an automated message please do not reply! Message from user %1$s at %2$s.',
	'IM_MESSAGE'			=> 'Nội dung',
	'IM_NAME'				=> 'Tên của bạn',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'Recipient',
	'IM_SEND'				=> 'Send message',
	'IM_SEND_MESSAGE'		=> 'Send message',
	'IM_SENT_JABBER'		=> 'Your message to %1$s has been sent successfully.',
	'IM_USER'				=> 'Send an instant message',

	'LAST_ACTIVE'				=> 'Hoạt động cuối',
	'LESS_THAN'					=> 'Ít hơn',
	'LIST_USERS'				=> array(
		1	=> '%d thành viên',
		2	=> '%d thành viên',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'The board requires you to be registered and logged in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'The board requires you to be registered and logged in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'The board requires you to be registered and logged in to view profiles.',

	'MANAGE_GROUP'			=> 'Quản lý nhóm',
	'MORE_THAN'				=> 'Nhiều hơn',

	'NO_CONTACT_FORM'		=> 'The board administrator contact form has been disabled.',
	'NO_CONTACT_PAGE'		=> 'The board administrator contact page has been disabled.',
	'NO_EMAIL'				=> 'You are not permitted to send email to this user.',
	'NO_VIEW_USERS'			=> 'You are not authorised to view the member list or profiles.',

	'ORDER'					=> 'Order',
	'OTHER'					=> 'Khác',

	'POST_IP'				=> 'Posted from IP/domain',

	'REAL_NAME'				=> 'Tên người nhận',
	'RECIPIENT'				=> 'Người nhận',
	'REMOVE_FOE'			=> 'Remove foe',
	'REMOVE_FRIEND'			=> 'Xóa bạn bè',

	'SELECT_MARKED'			=> 'Select marked',
	'SELECT_SORT_METHOD'	=> 'Select sort method',
	'SENDER_EMAIL_ADDRESS'	=> 'Email của bạn',
	'SENDER_NAME'			=> 'Tên của bạn',
	'SEND_ICQ_MESSAGE'		=> 'Gửi ICQ message',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Gửi Jabber message',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_YIM_MESSAGE'		=> 'Gửi YIM message',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Hoạt động lần cuối',
	'SORT_POST_COUNT'		=> 'Số bài viết',

	'USERNAME_BEGINS_WITH'	=> 'Username begins with',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'			=> 'User statistics',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Trực tuyến',
	'USER_PRESENCE'			=> 'Board presence',
	'USERS_PER_PAGE'		=> 'Users per page',

	'VIEWING_PROFILE'		=> 'Xem thông tin cá nhân - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Xem Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Xem Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Xem Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Xem YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Xem Google+',
));
