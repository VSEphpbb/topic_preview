<?php
/**
*
* info_acp_topic_preview [Română]
*
* @package language
* @copyright (c) 2014 Matt Friedman ( translated by cybernet http://xDNS.ro/ )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'				=> 'Previzualizare Subiect',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Va arăta o parte din textul primului subiect într-un tooltip în timp ce eşti cu mouse-ul deasupra titlului subiectului.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Setari pentru previzualizarea subiectelor',
	'TOPIC_PREVIEW_DISPLAY'			=> 'Afişează previzualizările subiectelor',
	'TOPIC_PREVIEW_LENGTH'			=> 'Lungimea textului subiectelor previzualizate',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'		=> 'Introdu numărul de caractere ce vor fi afişate în tooltip ( valoarea implicită este 150 ). Setarea acestei valori la 0 scoate din funcţiune această particularitate.',
	'TOPIC_PREVIEW_STRIP'			=> 'Coduri BB de ascuns în previzualizarea subiectelor',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'		=> 'Afişează codurile BB cu conţinutul pe care-l doreşti înlăturat din previzualizare (spoileri şi texte cod BB ascunse, spre exemplu). Separă codurile BB multiple folosind caracterul |, de exemplu: spoiler|ascunde|cod',
	'TOPIC_PREVIEW_AVATARS'			=> 'Display avatars in topic previews',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Include “Last post” text in topic previews',
	'CHARS'					=> 'Caractere',

	'TOPIC_PREVIEW_STYLE_SETTINGS'		=> 'Topic preview style settings',
	'TOPIC_PREVIEW_WIDTH'			=> 'Width of topic previews (in pixels)',
	'TOPIC_PREVIEW_DELAY'			=> 'Delay before showing topic previews (in milliseconds)',
	'TOPIC_PREVIEW_DRIFT'			=> 'Animated drift effect (in pixels)',
	'TOPIC_PREVIEW_DRIFT_EXPLAIN'		=> 'Amount of vertical animation on fadeout (use negative values to change direction).',
	'TOPIC_PREVIEW_THEME'			=> 'Theme for %s',
	'TOPIC_PREVIEW_THEME_EXPLAIN'		=> 'Choose a topic preview theme for %s.',
	'THEME'					=> 'theme',
	'MILLISECOND'				=> 'ms',
));
