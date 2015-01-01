<?php
/**
*
* Topic Preview
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\topicpreview\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \vse\topicpreview\core\topic_preview */
	protected $topicpreview;

	/**
	* Constructor
	*
	* @param \vse\topicpreview\core\topic_preview    $topicpreview  Topic Preview object
	* @return \vse\topicpreview\event\listener
	* @access public
	*/
	public function __construct(\vse\topicpreview\core\topic_preview $topicpreview)
	{
		$this->topicpreview = $topicpreview;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			// viewform.php events
			'core.viewforum_get_topic_data'			=> 'modify_sql_array',
			'core.viewforum_get_shadowtopic_data'	=> 'modify_sql_array',
			'core.viewforum_modify_topicrow'		=> 'display_topic_previews',

			// search.php events
			'core.search_get_topic_data'			=> 'modify_sql_string',
			'core.search_modify_tpl_ary'			=> 'display_topic_previews',

			// Custom events for integration with Precise Similar Topics
			'vse.similartopics.get_topic_data'		=> 'modify_sql_array',
			'vse.similartopics.modify_topicrow'		=> 'display_topic_previews',

			// Custom events for integration with Recent Topics
			'paybas.recenttopics.sql_pull_topics_data'	=> 'modify_sql_array',
			'paybas.recenttopics.modify_tpl_ary'		=> 'display_topic_previews',

			// Custom events for integration with Top Five
			'rmcgirr83.topfive.sql_pull_topics_data'	=> 'modify_sql_array',
			'rmcgirr83.topfive.modify_tpl_ary'			=> 'display_topic_previews',
		);
	}

	/**
	* Modify an SQL array to get post text for topic previews
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function modify_sql_array($event)
	{
		$event['sql_array'] = $this->topicpreview->modify_sql($event['sql_array']);
	}

	/**
	* Modify SQL strings to get post text for topic previews (search results)
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function modify_sql_string($event)
	{
		$event['sql_select'] = $this->topicpreview->modify_sql($event['sql_select'], 'SELECT');
		$event['sql_from'] = $this->topicpreview->modify_sql($event['sql_from'], 'JOIN');
	}

	/**
	* Modify template vars to display topic previews
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function display_topic_previews($event)
	{
		$block = $event['topic_row'] ? 'topic_row' : 'tpl_ary';
		$event[$block] = $this->topicpreview->display_topic_preview($event['row'], $event[$block]);
	}
}
