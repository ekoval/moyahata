<?php /* Smarty version 2.6.25, created on 2011-08-02 14:57:56
         compiled from tpl_head:15 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sitename', 'tpl_head:15', 2, false),array('function', 'title', 'tpl_head:15', 2, false),array('function', 'metadata', 'tpl_head:15', 5, false),array('function', 'cms_stylesheet', 'tpl_head:15', 8, false),array('function', 'cms_selflink', 'tpl_head:15', 11, false),)), $this); ?>
<?php $this->_cache_serials['/var/www/madesimple/tmp/templates_c/%%AC^AC0^AC0087CA%%tpl_head%3A15.inc'] = 'ed5b74b0e72c4e42e5e5684f2c3d21cf'; ?><head>
    <title><?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','0');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#0}'; endif;?>
 - <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','1');echo smarty_cms_function_title(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#1}'; endif;?>
</title>

 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','2');echo smarty_cms_function_metadata(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#2}'; endif;?>


 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','3');echo smarty_cms_function_cms_stylesheet(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#3}'; endif;?>


 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','4');echo smarty_cms_function_cms_selflink(array('dir' => 'start','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#4}'; endif;?>

 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','5');echo smarty_cms_function_cms_selflink(array('dir' => 'prev','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#5}'; endif;?>

 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('ed5b74b0e72c4e42e5e5684f2c3d21cf','6');echo smarty_cms_function_cms_selflink(array('dir' => 'next','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:ed5b74b0e72c4e42e5e5684f2c3d21cf#6}'; endif;?>


 <?php echo '
<script type="text/JavaScript">
<!--
//pass min and max - measured against window width
function P7_MinMaxW(a,b){
var nw="auto",w=document.documentElement.clientWidth;
if(w>=b){nw=b+"px";}if(w<=a){nw=a+"px";}return nw;
}
//-->
</script>
    <!--[if lte IE 6]>
    <style type="text/css">
    #pagewrapper {width:expression(P7_MinMaxW(720,950));}
    #container {height: 1%;}
    </style>
    <![endif]-->
    '; ?>


    <!--[if lte IE 6]>
    <script type="text/javascript" src="modules/MenuManager/CSSMenu.js"></script>
    <![endif]--> 

  </head>