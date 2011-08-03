<?php /* Smarty version 2.6.25, created on 2011-07-28 14:52:08
         compiled from module_file_tpl:MenuManager%3Bsimple_navigation.tpl */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/92e0835287cb0e075f60132042e01f26^%%C2^C24^C24843E6%%module_file_tpl%3AMenuManager%3Bsimple_navigation.tpl.inc'] = '133390bc7cd7fb52d7bca02515370f24';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;simple_navigation.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;simple_navigation.tpl', 30, false),)), $this); ?>
<?php
function _smarty_tplfunc_133390bc7cd7fb52d7bca02515370f24_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('133390bc7cd7fb52d7bca02515370f24','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_133390bc7cd7fb52d7bca02515370f24_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('133390bc7cd7fb52d7bca02515370f24','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_133390bc7cd7fb52d7bca02515370f24_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('133390bc7cd7fb52d7bca02515370f24','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
