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

class main_listener implements EventSubscriberInterface
{
	protected $language;

	public function __construct(
		\phpbb\language\language $language
	)
	{
		$this->language		= $language;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'				=> 'load_language_on_setup',
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
}
