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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Tại đây bạn có thể sao lưu dữ liệu diễn đàn. File backup sẽ được lưu vào thư mục <samp>store/</samp> hoặc tải về máy tính của bạn.',
	'ACP_RESTORE_EXPLAIN'	=> 'Thao tác này sẽ thực hiện khôi phục đầy đủ tất cả các bảng của phpBB từ một tệp tin đã lưu. Nếu máy chủ của bạn hỗ trợ, bạn có thể sử dụng một tập tin nén gzip hoặc bzip2 và nó sẽ tự động được giải nén. <strong>Cảnh báo</strong>Điều này sẽ ghi đè lên bất kỳ dữ liệu hiện có. Việc khôi phục có thể mất một thời gian dài để xử lý xin vui lòng không di chuyển từ trang này cho đến khi nó được hoàn thành. Bản sao lưu được lưu trữ trong thư mục <samp>store/</samp>, tập tin được tạo bởi phpBB. Tệp tin khôi phục dữ liệu không được tạo bởi hệ thống phpBB có thể không hoạt động hoặc bị lỗi.',

	'BACKUP_DELETE'		=> 'Xóa file sao lưu thành công.',
	'BACKUP_INVALID'	=> 'Tệp đã chọn để sao lưu không hợp lệ.',
	'BACKUP_OPTIONS'	=> 'Tùy chọn sao lưu',
	'BACKUP_SUCCESS'	=> 'Tạo file backup thành công.',
	'BACKUP_TYPE'		=> 'Kiểu backup',

	'DATABASE'			=> 'Database utilities',
	'DATA_ONLY'			=> 'Chỉ dữ liệu (Data only)',
	'DELETE_BACKUP'		=> 'Xóa bản sao lưu',
	'DELETE_SELECTED_BACKUP'	=> 'Bạn thực sự muốn xóa bản sao lưu đã chọn?',
	'DESELECT_ALL'		=> 'Bỏ chọn tất cả',
	'DOWNLOAD_BACKUP'	=> 'Tải bản sao lưu',

	'FILE_TYPE'			=> 'Kiểu file',
	'FILE_WRITE_FAIL'	=> 'Không thể sao lưu lên server. Vui lòng kiểm tra lại CHMOD.',
	'FULL_BACKUP'		=> 'Toàn bộ',

	'RESTORE_FAILURE'		=> 'Có thể bản backup đã bị lỗi.',
	'RESTORE_OPTIONS'		=> 'Tùy chọn khôi phục',
	'RESTORE_SELECTED_BACKUP'	=> 'Bạn thực sự muốn khôi phục dữ liệu diễn đàn đã chọn?',
	'RESTORE_SUCCESS'		=> 'Khôi phục dữ liệu diễn đàn thành công.<br /><br />Diễn đàn sẽ quay trở lại phiên bàn tính theo bản backup bạn đã chọn.',

	'SELECT_ALL'			=> 'Chọn tất cả',
	'SELECT_FILE'			=> 'Chọn file',
	'START_BACKUP'			=> 'Bắt đầu sao lưu',
	'START_RESTORE'			=> 'Bắt đầu khôi phục',
	'STORE_AND_DOWNLOAD'	=> 'Lưu trữ và tải về',
	'STORE_LOCAL'			=> 'Lưu trên server',
	'STRUCTURE_ONLY'		=> 'Chỉ cấu trúc table',

	'TABLE_SELECT'		=> 'Chọn bảng dữ liệu',
	'TABLE_SELECT_ERROR'=> 'Bạn phải chọn ít nhất 1 bảng dữ liệu.',
));
