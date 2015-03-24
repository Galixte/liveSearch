<?php
/** 
*
* liveSearch [Russian]
*
* @package liveSearch
* @copyright (c) 2014 alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
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
	'ACP_LIVE_SEARCH'		=> '������� (�����) �����',
	'ACP_LIVE_SEARCH_MOD_VER'				=> '������ ����: ',
	'ACP_LIVE_SEARCH_SETTINGS'				=> '��������� �������� ������',
	'ACP_LIVE_SEARCH_SETTINGS_FORUMS'				=> '������� ����� �� �������',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS'				=> '������� ����� �� �����',
	'ACP_LIVE_SEARCH_SETTINGS_SIMILARTOPICS'				=> '������� ����� ������� ��� �� ����� �������� ����� ����',
	//'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=> '�������(�����) ����� �� �������� ����, ���� ��������, ����� �������������� ���� �� ���� ����������� � ������� ��������, ���� �� ����������� ������ � ���� ������������ � �� ���������� <br /><strong>�����: ��� ���������� ������ �������� ���������� ��������� MySQL ������ 4.1 ��� ����!</strong><br />',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=>'<strong>�����: ��� ���������� ������ �������� ���������� ��������� MySQL ������ 4.1 ��� ����!</strong><br />',
	'ACP_LIVE_SEARCH_SETTINGS_USERS'				=> '������� ����� �� �������������',

	'LIVE_SEARCH_MIN_NUM_SYMBLOLS'				=> '����������� ����� �������� ��� ������',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_EXPLAIN'				=> '����� ����� ���������� ��������� ���������� ��������',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW'				=> '����� �����������',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW_EXPLAIN'				=> ' ������������ ����� �����������, ������� ����� �������� � ���������� ������.. ��������������� �������� 20.',
	'LIVE_SEARCH_EXCLUDE_FORUMS'		=> '������, ����������� �� ������ ������',
	'LIVE_SEARCH_EXCLUDE_FORUMS_EXPLAIN'		=> '������ ���������� �������� ������� �������',

	'LIVE_SEARCH_FORUM_ON'				=> '<strong> �������� ������� ����� �� �������</strong>',
	'LIVE_SEARCH_TOPIC_ON'				=> '<strong> �������� ������� ����� �� �����</strong>',
	'LIVE_SEARCH_USER_ON'				=> '<strong> �������� ������� ����� �� �������������</strong>',
	'LIVE_SEARCH_SIMILARTOPIC_ON'				=> '<strong> �������� ������� ����� ������� ���</strong>',
	'LIVE_SEARCH_SHOW_IN_NEW_WINDOW'				=> '���������� ���������� � ����� ���� ',
	'LIVE_SEARCH_SHOW_FOR_GUEST'				=> '���������� ��� ������ ',
	'LIVE_SEARCH_USE_EYE_BUTTON'				=> '������������ ������ "����" ��� ���������� �������� ������ ������ ',
));


$lang = array_merge($lang, array(
	'ACP_LIVE_SEARCH'		=> 'Quick search',
	'ACP_LIVE_SEARCH_MOD_VER'				=> 'Mod version: ',
	'ACP_LIVE_SEARCH_SETTINGS'				=> 'Quick search settings',
	'ACP_LIVE_SEARCH_SETTINGS_FORUMS'				=> 'Quick search forums',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS'				=> 'Quick search topics',
	'ACP_LIVE_SEARCH_SETTINGS_SIMILARTOPICS'				=> 'Quick search for similar topics when creating a new game',
	//'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=> '�������(�����) ����� �� �������� ����, ���� ��������, ����� �������������� ���� �� ���� ����������� � ������� ��������, ���� �� ����������� ������ � ���� ������������ � �� ���������� <br /><strong>�����: ��� ���������� ������ �������� ���������� ��������� MySQL ������ 4.1 ��� ����!</strong><br />',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=>'<strong>Important: The extension requires Mysql version 4.1 or higher!</strong><br />',
	'ACP_LIVE_SEARCH_SETTINGS_USERS'				=> 'Quick search users',

	'LIVE_SEARCH_MIN_NUM_SYMBLOLS'				=> 'Min number of characters for search',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_EXPLAIN'				=> 'The search starts after the min number of characters are entered,',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW'				=> 'Number of results',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW_EXPLAIN'				=> 'Limits the result number that is shown in the dropdown list. The recommended value is 20.',
	'LIVE_SEARCH_EXCLUDE_FORUMS'		=> 'Forms that are exluded from the live search',
	'LIVE_SEARCH_EXCLUDE_FORUMS_EXPLAIN'		=> 'List of comma separated forum numbers',

	'LIVE_SEARCH_FORUM_ON'				=> '<strong> Turn on quick forum search</strong>',
	'LIVE_SEARCH_TOPIC_ON'				=> '<strong> Turn on quick topic search </strong>',
	'LIVE_SEARCH_USER_ON'				=> '<strong> Turn on quick user search </strong>',
	'LIVE_SEARCH_SIMILARTOPIC_ON'				=> '<strong> Turn on similar topics search</strong>',
	'LIVE_SEARCH_SHOW_IN_NEW_WINDOW'				=> 'Show results in a new window ',
	'LIVE_SEARCH_SHOW_FOR_GUEST'				=> 'Show to guests ',
	'LIVE_SEARCH_USE_EYE_BUTTON'				=> 'Use "eye" button to temporary hide the search panel',
));
