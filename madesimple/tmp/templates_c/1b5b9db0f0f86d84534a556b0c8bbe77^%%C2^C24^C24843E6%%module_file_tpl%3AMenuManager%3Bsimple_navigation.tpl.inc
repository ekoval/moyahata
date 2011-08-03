<?php /* Smarty version 2.6.25, created on 2011-07-28 15:13:15
         compiled from module_file_tpl:MenuManager%3Bsimple_navigation.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/1b5b9db0f0f86d84534a556b0c8bbe77^%%C2^C24^C24843E6%%module_file_tpl%3AMenuManager%3Bsimple_navigation.tpl.inc'] = '77660a8373abd72f005c15172c948e45';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;simple_navigation.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;simple_navigation.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_77660a8373abd72f005c15172c948e45_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77660a8373abd72f005c15172c948e45','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_77660a8373abd72f005c15172c948e45_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77660a8373abd72f005c15172c948e45','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_77660a8373abd72f005c15172c948e45_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77660a8373abd72f005c15172c948e45','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
