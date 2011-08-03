<?php /* Smarty version 2.6.25, created on 2011-07-28 14:52:08
         compiled from module_file_tpl:MenuManager%3Bcssmenu.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/582e4554e3fbd66ef6685d47b27afd1d^%%A8^A88^A88C4357%%module_file_tpl%3AMenuManager%3Bcssmenu.tpl.inc'] = '45b6f67cf61ecaafc86b35a53510fdf0';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_45b6f67cf61ecaafc86b35a53510fdf0_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('45b6f67cf61ecaafc86b35a53510fdf0','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_45b6f67cf61ecaafc86b35a53510fdf0_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('45b6f67cf61ecaafc86b35a53510fdf0','1');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_45b6f67cf61ecaafc86b35a53510fdf0_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('45b6f67cf61ecaafc86b35a53510fdf0','2');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
