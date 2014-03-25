<?php
/**
*
* info_acp_topic_preview [Rom&#226;n&#259;]
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
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Va ar&#259;ta o parte din textul primului subiect &#238;ntr-un tooltip &#238;n timp ce e&#351;ti cu mouse-ul deasupra titlului subiectului.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Set&#259;ri pentru previzualizare subiecte',
	'TOPIC_PREVIEW_DISPLAY'			=> 'Afi&#351;eaz&#259; previzualiz&#259;rile subiectelor',
	'TOPIC_PREVIEW_LENGTH'			=> 'Lungimea textului subiectelor previzualizate',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'		=> 'Introdu num&#259;rul de caractere ce vor fi afi&#351;ate &#238;n tooltip ( valoarea implicit&#259; este 150 ). Setarea acestei valori la 0 scoate din funcţiune aceast&#259; particularitate.',
	'TOPIC_PREVIEW_STRIP'			=> 'Coduri BB de ascuns &#238;n previzualizarea subiectelor',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'		=> 'Afi&#351;eaz&#259; codurile BB cu conţinutul pe care-l dore&#351;ti &#238;nl&#259;turat din previzualizare ( spoiler &#351;i texte cod BB ascunse, spre exemplu ). Separ&#259; codurile BB multiple folosind caracterul |, de exemplu: spoiler|ascunde|cod',
	'TOPIC_PREVIEW_AVATARS'			=> 'Display avatars in topic previews',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Include "Ultimul Post" in previzualizare',
	'CHARS'					=> 'Caractere',

	'TOPIC_PREVIEW_STYLE_SETTINGS'		=> 'Setari de stil pentru previzualizarea subiectului',
	'TOPIC_PREVIEW_WIDTH'			=> 'L&#259;timea previzu&#259;lizarii ( in pixeli )',
	'TOPIC_PREVIEW_DELAY'			=> 'Am&#226;n&#259; afisarea previzualizarii ( in milliseconds )',
	'TOPIC_PREVIEW_DRIFT'			=> 'Animated drift effect ( in pixeli )',
	'TOPIC_PREVIEW_DRIFT_EXPLAIN'		=> 'Amount of vertical animation on fadeout ( use negative values to change direction ).',
	'TOPIC_PREVIEW_THEME'			=> 'Stil pentru %s',
	'TOPIC_PREVIEW_THEME_EXPLAIN'		=> 'Alege un stil pentru previzualizarea subiectului %s.',
	'THEME'					=> 'Stil',
	'MILLISECOND'				=> 'ms',
));
