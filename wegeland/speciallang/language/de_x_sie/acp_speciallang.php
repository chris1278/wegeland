<?php
/**
 *
 * Special Ext for Extra Language Values.
 *
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SPECIALLANG_EXPLAIN'		=> 'Einstellungen für die Extension für Walter Wegeland',
	'ACP_SPECIAL_SWITCH'			=> 'Funktion Aktivieren',
	'ACP_SPECIAL_SWITCH_EXPLAIN'	=> 'Hier können Sie auswählen, ob die Funktion aktiviert wird oder nicht.',
]);
