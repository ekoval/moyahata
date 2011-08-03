<?php /* Smarty version 2.6.25, created on 2011-07-28 15:35:35
         compiled from module_db_tpl:News%3BdetailSample */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/News^%%E8^E85^E85D59E8%%module_db_tpl%3ANews%3BdetailSample.inc'] = '49ba43f416a95ad2fb6c3d65903a30d2';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cms_date_format', 'module_db_tpl:News;detailSample', 8, false),array('modifier', 'cms_escape', 'module_db_tpl:News;detailSample', 11, false),array('function', 'eval', 'module_db_tpl:News;detailSample', 18, false),)), $this); ?>
<?php
function _smarty_tplfunc_49ba43f416a95ad2fb6c3d65903a30d2_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49ba43f416a95ad2fb6c3d65903a30d2','0');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->summary), $_smarty);
}


function _smarty_tplfunc_49ba43f416a95ad2fb6c3d65903a30d2_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49ba43f416a95ad2fb6c3d65903a30d2','1');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->content), $_smarty);
}


function _smarty_tplfunc_49ba43f416a95ad2fb6c3d65903a30d2_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('49ba43f416a95ad2fb6c3d65903a30d2','2');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['field']->value), $_smarty);
}



?>
