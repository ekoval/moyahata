<?php /* Smarty version 2.6.25, created on 2011-07-28 14:57:26
         compiled from module_file_tpl:MenuManager%3Bcssmenu.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/fde2369efa05e97a1304e93740562cd5^%%A8^A88^A88C4357%%module_file_tpl%3AMenuManager%3Bcssmenu.tpl.inc'] = '8c98f1726ec50d0e701ec9d67d6d357b';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_8c98f1726ec50d0e701ec9d67d6d357b_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('8c98f1726ec50d0e701ec9d67d6d357b','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_8c98f1726ec50d0e701ec9d67d6d357b_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('8c98f1726ec50d0e701ec9d67d6d357b','1');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_8c98f1726ec50d0e701ec9d67d6d357b_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('8c98f1726ec50d0e701ec9d67d6d357b','2');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
