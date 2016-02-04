<?php
/**
 *
 * Topic Preview
 *
 * @copyright (c) 2016 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace vse\topicpreview\core\tools;

interface tool_interface
{
	/**
	 * Is this tool available to run?
	 *
	 * @return bool True if available, false otherwise
	 */
	public function is_available();

	/**
	 * Run this tool
	 *
	 * @return string Stripped message text
	 * @access public
	 */
	public function run();

	/**
	 * Set the text property
	 *
	 * @param string $text
	 * @return $this
	 */
	public function set_text($text);

	/**
	 * Set the data array of data to remove
	 *
	 * @return $this
	 */
	public function set_data();

	/**
	 * Get the tool name
	 *
	 * @return string
	 */
	public function get_name();

	/**
	 * Set the tool name
	 *
	 * @param string $name
	 */
	public function set_name($name);
}
