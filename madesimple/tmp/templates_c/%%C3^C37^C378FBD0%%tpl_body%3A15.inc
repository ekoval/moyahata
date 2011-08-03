<?php /* Smarty version 2.6.25, created on 2011-08-02 14:57:56
         compiled from tpl_body:15 */

$this->_cache_serials['/var/www/madesimple/tmp/templates_c/%%C3^C37^C378FBD0%%tpl_body%3A15.inc'] = 'e42e1ff2930426e30235e586be183573';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'anchor', 'tpl_body:15', 8, false),array('function', 'sitename', 'tpl_body:15', 20, false),array('function', 'cms_selflink', 'tpl_body:15', 23, false),array('function', 'search', 'tpl_body:15', 30, false),array('function', 'breadcrumbs', 'tpl_body:15', 39, false),array('function', 'menu', 'tpl_body:15', 54, false),array('function', 'news', 'tpl_body:15', 61, false),array('function', 'print', 'tpl_body:15', 74, false),array('function', 'title', 'tpl_body:15', 75, false),array('function', 'content', 'tpl_body:15', 76, false),array('function', 'global_content', 'tpl_body:15', 114, false),)), $this); ?>
<?php
function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','0');echo smarty_cms_function_anchor(array('anchor' => 'menu_vert','title' => 'Skip to navigation','accesskey' => 'n','text' => 'Skip to navigation'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','1');echo smarty_cms_function_anchor(array('anchor' => 'main','title' => 'Skip to content','accesskey' => 's','text' => 'Skip to content'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','2');echo smarty_cms_function_sitename(array(), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_3(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','3');echo smarty_cms_function_cms_selflink(array('dir' => 'start','text' => ($_smarty->_tpl_vars['sitename'])), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_4(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','4');echo smarty_cms_function_search(array(), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_5(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','5');echo smarty_cms_function_breadcrumbs(array('starttext' => 'You are here','root' => 'Home','delimiter' => '&raquo;'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_6(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','6');echo smarty_cms_function_menu(array('loadprops' => 0,'template' => 'cssmenu.tpl'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_7(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','7');echo smarty_cms_function_news(array('number' => '3','detailpage' => 'news'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_8(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','8');echo smarty_cms_function_print(array('showbutton' => true,'script' => true), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_9(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','9');echo smarty_cms_function_title(array(), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_10(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','10');echo smarty_cms_function_content(array(), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_11(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','11');echo smarty_cms_function_anchor(array('anchor' => 'main','text' => '^ Top'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_12(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','12');echo smarty_cms_function_cms_selflink(array('dir' => 'previous','label' => "Previous page: "), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_13(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','13');echo smarty_cms_function_cms_selflink(array('dir' => 'next'), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_14(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','14');echo smarty_cms_function_menu(array('loadprops' => 0), $_smarty);
}


function _smarty_tplfunc_e42e1ff2930426e30235e586be183573_15(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','15');echo smarty_cms_function_global_content(array('name' => 'footer'), $_smarty);
}



?>
