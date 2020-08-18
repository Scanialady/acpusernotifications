<?php
/**
*
* @package ACP User Notifications
* @copyright (c) 2020 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = [];
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLICK_DONATE'				=> 'Klicke hier, um zu spenden',

	'DONATE'					=> 'Spende',
	'DONATE_EXTENSIONS'			=> 'Spende für meine Erweiterungen',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Diese Extension ist, wie alle meine Extensionen, vollständig kostenlos. Wenn du von der Nutzung profitiert hast, dann denke bitte über eine Spende unter Benutzung des PayPal-Button nach, oder benutze das QR-Bild “Scan, Pay, Go” gegenüber - Ich würde es begrüßen.<br><br>Ich verspreche, dass es keinen Spam oder Anfragen für künftige Spenden geben wird, dennoch sind solche jederzeit willkommen.',

	'NEW_VERSION'				=> 'Neue Version - %s',
	'NEW_VERSION_EXPLAIN'		=> 'Version %1$s dieser Erweiterung ist nun zum Download verfügbar.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Download hier',
	'NO_JS'						=> 'Es scheint, dass du Javascript deaktiviert hast.<br>Bitte <a href="https://enablejavascript.co/">aktiviere</a> es in deinem Browser, um it in your browser um alle Vorteile der Funktionen dieser Seite nutzen zu können.',
	'NO_VERSION_EXPLAIN'		=> 'Die Information über Versionsupdates ist nicht verfügbar.',

	'PAYPAL_BUTTON'				=> 'Spende mit PayPal-Button',
	'PAYPAL_TITLE'				=> 'PayPal - einfach und sicher online bezahlen!',
	'PHP_NOT_VALID'				=> 'Deine Version von PHP ist mit dieser Erweiterung nicht kompatibel.',
	'PHPBB_NOT_VALID'			=> 'Deine Version von phpBB ist mit dieser Erweiterung nicht kompatibel.',

	'VERSION'					=> 'Version',
));
