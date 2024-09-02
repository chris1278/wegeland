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

namespace wegeland\speciallang\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\wegeland\speciallang\acp\main_module',
			'title'		=> 'ACP_SPECIALLANG_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'SETTINGS',
					'auth'	=> 'ext_wegeland/speciallang',
					'cat'	=> ['ACP_SPECIALLANG_TITLE'],
				],
			],
		];
	}
}
