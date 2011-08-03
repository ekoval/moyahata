<?php /* Smarty version 2.6.25, created on 2011-07-28 15:31:03
         compiled from module_file_tpl:MenuManager%3Bcssmenu.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/ee506741b5c54307ef49e9d472273161^%%A8^A88^A88C4357%%module_file_tpl%3AMenuManager%3Bcssmenu.tpl.inc'] = '49e4d90a0140c540e5ff10df885e5c78';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_49e4d90a0140c540e5ff10df885e5c78_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49e4d90a0140c540e5ff10df885e5c78','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_49e4d90a0140c540e5ff10df885e5c78_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49e4d90a0140c540e5ff10df885e5c78','1');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_49e4d90a0140c540e5ff10df885e5c78_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49e4d90a0140c540e5ff10df885e5c78','2');echo smarty_cms_function_repeat(array('string' => '</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
