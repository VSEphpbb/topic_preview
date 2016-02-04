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

class remove_markup extends base
{
	/** @var array Data array of regex patterns */
	protected $data;

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		return $this->set_data()->remove_markup();
	}

	/**
	 * @inheritdoc
	 */
	public function set_data()
	{
		if (!isset($this->data))
		{
			// RegEx patterns originally based on Topic Text Hover Mod by RMcGirr83
			$this->data = array(
				'#<!-- [lmw] --><a class="postlink[^>]*>(.*<\/a[^>]*>)?<!-- [lmw] -->#Usi', // Magic URLs
				'#<[^>]*>(.*<[^>]*>)?#Usi', // HTML code
				'#\[/?[^\[\]]+\]#mi', // All BBCode tags
				'#(http|https|ftp|mailto)(:|\&\#58;)\/\/[^\s]+#i', // Remaining URLs
				'#"#', // Possible un-encoded quotes from older board conversions
				'#[ \t]{2,}#' // Multiple spaces #[\s]+#
			);
		}

		return $this;
	}

	/**
	 * Remove markup from the text
	 *
	 * @return string Stripped message text
	 * @access protected
	 */
	protected function remove_markup()
	{
		return trim(preg_replace($this->data, ' ', $this->text));
	}
}
