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

namespace wegeland\speciallang\migrations;

class v_1_0_1 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v330\v330'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SPECIALLANG_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_SPECIALLANG_TITLE', [
					'module_basename'	=> '\wegeland\speciallang\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
			['config.add',['speciallang_switch', 0]],
		];
	}
}
