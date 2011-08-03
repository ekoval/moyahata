<?php /* Smarty version 2.6.25, created on 2011-07-28 14:50:00
         compiled from module_file_tpl:MenuManager%3Bcssmenu.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/ea02e07ff1b111671bbc52179bbcaaab^%%A8^A88^A88C4357%%module_file_tpl%3AMenuManager%3Bcssmenu.tpl.inc'] = 'dc0ada2c1a6408254c367f0ed62266a2';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_dc0ada2c1a6408254c367f0ed62266a2_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('dc0ada2c1a6408254c367f0ed62266a2','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_dc0ada2c1a6408254c367f0ed62266a2_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('dc0ada2c1a6408254c367f0ed62266a2','1');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_dc0ada2c1a6408254c367f0ed62266a2_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('dc0ada2c1a6408254c367f0ed62266a2','2');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
