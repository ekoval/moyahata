<?php /* Smarty version 2.6.25, created on 2011-07-28 14:50:00
         compiled from globalcontent:footer */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'custom_copyright', 'globalcontent:footer', 1, false),array('function', 'cms_version', 'globalcontent:footer', 2, false),)), $this); ?>
<?php $this->_cache_serials['/var/www/madesimple/tmp/templates_c/%%EE^EE6^EE6D73C2%%globalcontent%3Afooter.inc'] = 'bf190ae8ea2d5adfe7cbfcdf1a4c9d07'; ?><p>&copy; Copyright <?php if ($this->caching && !$this->_cache_including): echo '{nocache:bf190ae8ea2d5adfe7cbfcdf1a4c9d07#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('bf190ae8ea2d5adfe7cbfcdf1a4c9d07','0');echo cms_tmp_custom_copyright_userplugin_function(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:bf190ae8ea2d5adfe7cbfcdf1a4c9d07#0}'; endif;?>
 - CMS Made Simple<br />
This site is powered by <a href="http://www.cmsmadesimple.org">CMS Made Simple</a> version <?php if ($this->caching && !$this->_cache_including): echo '{nocache:bf190ae8ea2d5adfe7cbfcdf1a4c9d07#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('bf190ae8ea2d5adfe7cbfcdf1a4c9d07','1');echo smarty_cms_function_cms_version(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:bf190ae8ea2d5adfe7cbfcdf1a4c9d07#1}'; endif;?>
</p>