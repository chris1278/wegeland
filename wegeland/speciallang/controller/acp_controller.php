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

namespace wegeland\speciallang\controller;

class acp_controller
{
	protected $language;
	protected $request;
	protected $template;
	protected $config;
	protected $u_action;

	public function __construct(
		\phpbb\language\language $language,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\config\config $config
	)
	{
		$this->language	= $language;
		$this->request	= $request;
		$this->template	= $template;
		$this->config	= $config;
	}

	public function display_options()
	{
		$this->language->add_lang('acp_speciallang', 'wegeland/speciallang');
		add_form_key('wegeland_speciallang');
		$errors = [];

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('wegeland_speciallang'))
			{
				$errors[] = $this->language->lang('FORM_INVALID');
			}
			if (empty($errors))
			{
				$this->config->set('speciallang_switch', $this->request->variable('speciallang_switch', 0));
				trigger_error($this->language->lang('ACP_SPECIALLANG_SETTING_SAVED') . adm_back_link($this->u_action));
			}
		}

		$s_errors = !empty($errors);

		$this->template->assign_vars([
			'SPECIALLANG_S_ERROR'		=> $s_errors,
			'SPECIALLANG_ERROR_MSG'		=> $s_errors ? implode('<br>', $errors) : '',
			'ACP_SPECIAL_SWITCH'		=> $this->config['speciallang_switch'],
			'U_ACTION'					=> $this->u_action,
		]);
	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
