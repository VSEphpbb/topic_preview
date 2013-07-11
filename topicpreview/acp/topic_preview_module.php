<?php
/**
*
* @package Topic Preview
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class phpbb_ext_vse_topicpreview_acp_topic_preview_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_topic_preview';
		$this->page_title = $user->lang['TOPIC_PREVIEW'];

		$form_key = 'acp_topic_preview';
		add_form_key($form_key);

		$submit = (isset($_POST['submit'])) ? true : false;

		if ($submit)
		{
			if (!check_form_key($form_key))
			{
				trigger_error('FORM_INVALID');
			}

			$topic_preview_limit = request_var('topic_preview_limit', 0);
			set_config('topic_preview_limit', abs($topic_preview_limit));

			$topic_preview_strip_bbcodes = request_var('topic_preview_strip_bbcodes', '');
			set_config('topic_preview_strip_bbcodes', $topic_preview_strip_bbcodes);

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'TOPIC_PREVIEW_LIMIT'		=> isset($config['topic_preview_limit']) ? $config['topic_preview_limit'] : '',
			'TOPIC_PREVIEW_STRIP'		=> isset($config['topic_preview_strip_bbcodes']) ? $config['topic_preview_strip_bbcodes'] : '',
			'S_TOPIC_PREVIEW_VERSION'	=> isset($config['topic_preview_version']) ? 'v' . $config['topic_preview_version'] : false,
			'U_ACTION'					=> $this->u_action,
		));
	}
}
