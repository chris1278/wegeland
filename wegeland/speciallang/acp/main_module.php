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

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main()
	{
		global $phpbb_container;

		$this->tpl_name = 'acp_speciallang';

		$acp_controller = $phpbb_container->get('wegeland.speciallang.controller.acp');

		$language = $phpbb_container->get('language');

		$this->page_title = $language->lang('ACP_SPECIALLANG_TITLE');

		$acp_controller->set_page_url($this->u_action);

		$acp_controller->display_options();
	}
}
