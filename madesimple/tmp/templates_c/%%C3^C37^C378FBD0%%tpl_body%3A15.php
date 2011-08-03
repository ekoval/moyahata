<?php /* Smarty version 2.6.25, created on 2011-08-02 14:57:56
         compiled from tpl_body:15 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'anchor', 'tpl_body:15', 8, false),array('function', 'sitename', 'tpl_body:15', 20, false),array('function', 'cms_selflink', 'tpl_body:15', 23, false),array('function', 'search', 'tpl_body:15', 30, false),array('function', 'breadcrumbs', 'tpl_body:15', 39, false),array('function', 'menu', 'tpl_body:15', 54, false),array('function', 'news', 'tpl_body:15', 61, false),array('function', 'print', 'tpl_body:15', 74, false),array('function', 'title', 'tpl_body:15', 75, false),array('function', 'content', 'tpl_body:15', 76, false),array('function', 'global_content', 'tpl_body:15', 114, false),)), $this); ?>
<?php $this->_cache_serials['/var/www/madesimple/tmp/templates_c/%%C3^C37^C378FBD0%%tpl_body%3A15.inc'] = 'e42e1ff2930426e30235e586be183573'; ?>
  <body>
    <div id="pagewrapper">

      <ul class="accessibility">
        <li><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','0');echo smarty_cms_function_anchor(array('anchor' => 'menu_vert','title' => 'Skip to navigation','accesskey' => 'n','text' => 'Skip to navigation'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#0}'; endif;?>
</li>
        <li><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','1');echo smarty_cms_function_anchor(array('anchor' => 'main','title' => 'Skip to content','accesskey' => 's','text' => 'Skip to content'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#1}'; endif;?>
</li>
      </ul>

      <hr class="accessibility" />

      <div id="header">

        <h2 class="headright"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','2');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#2}'; endif;?>
</h2>

        <h1><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','3');echo smarty_cms_function_cms_selflink(array('dir' => 'start','text' => ($this->_tpl_vars['sitename'])), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#3}'; endif;?>
</h1>        
        <hr class="accessibility" />
      </div>

      <div id="search">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','4');echo smarty_cms_function_search(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#4}'; endif;?>

      </div>

      <div class="crbk">

        <div class="breadcrumbs">
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','5');echo smarty_cms_function_breadcrumbs(array('starttext' => 'You are here','root' => 'Home','delimiter' => '&raquo;'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#5}'; endif;?>

          <hr class="accessibility" />
        </div>
      </div>

      <div id="content">

        <div id="sidebar">
          <div id="sidebara">

            <h2 class="accessibility">Navigation</h2>
            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','6');echo smarty_cms_function_menu(array('loadprops' => 0,'template' => 'cssmenu.tpl'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#6}'; endif;?>

            <hr class="accessibility" />

            <div id="news">
              <h2>News</h2>
              <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#7}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','7');echo smarty_cms_function_news(array('number' => '3','detailpage' => 'news'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#7}'; endif;?>

            </div>

          </div>
        </div>

        <div class="back1">
          <div class="back2">
            <div class="back3">
              <div id="main">
                <div style="float: right;"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#8}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','8');echo smarty_cms_function_print(array('showbutton' => true,'script' => true), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#8}'; endif;?>
</div>
                <h2><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#9}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','9');echo smarty_cms_function_title(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#9}'; endif;?>
</h2>
                <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#10}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','10');echo smarty_cms_function_content(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#10}'; endif;?>

                <br />
            <div class="right49">
              <p><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#11}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','11');echo smarty_cms_function_anchor(array('anchor' => 'main','text' => '^ Top'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#11}'; endif;?>
</p>
            </div>

            <div class="left49">
              <p> <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#12}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','12');echo smarty_cms_function_cms_selflink(array('dir' => 'previous','label' => "Previous page: "), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#12}'; endif;?>

              <br />
              <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#13}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','13');echo smarty_cms_function_cms_selflink(array('dir' => 'next'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#13}'; endif;?>

              </p>
            </div>

                <hr class="accessibility" />
                <div class="clear">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="footback">
        <div id="footer">
          <div id="fooleft">
          <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#14}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','14');echo smarty_cms_function_menu(array('loadprops' => 0), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#14}'; endif;?>

          </div>
          <div id="footrt">
          <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e42e1ff2930426e30235e586be183573#15}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('e42e1ff2930426e30235e586be183573','15');echo smarty_cms_function_global_content(array('name' => 'footer'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:e42e1ff2930426e30235e586be183573#15}'; endif;?>

          </div>
          <div class="clear"></div>
        </div>
      </div>

    </div>
  </body>
</html>