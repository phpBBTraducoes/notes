<?php
/**
*
* Notes extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by null2 (c) 2016 [ver 2.0.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'NOTES'				=> 'Anotações',
	'NOTES_DESCRIPTION'	=> 'Suas anotações não podem ser vistas por mais ninguém, nem moderadores e administradores.',
	'SAVE_NOTES'		=> 'Salvar anotações',
	'NOTES_SAVED'		=> 'Suas anotações foram salvas.<br /><br /> <a href="%s">Voltar</a>',
));
