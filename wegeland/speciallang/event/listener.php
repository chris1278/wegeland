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

namespace wegeland\speciallang\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $template;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template
	)
	{
		$this->config	= $config;
		$this->template	= $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'				=> 'load_language_on_setup',
			'core.page_header_after'		=> 'run_wegeland',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= [
			'ext_name'	=> 'wegeland/speciallang',
			'lang_set'	=> 'speciallang',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function run_wegeland()
	{
		$this->template->assign_vars([
			'WS_SPECIALLANG'		=> ($this->config['speciallang_switch']) ? true : false,
		]);
	}
}
