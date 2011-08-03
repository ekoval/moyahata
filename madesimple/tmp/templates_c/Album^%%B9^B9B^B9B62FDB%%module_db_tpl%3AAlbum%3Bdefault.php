<?php /* Smarty version 2.6.25, created on 2011-07-28 15:46:44
         compiled from module_db_tpl:Album%3Bdefault */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'module_db_tpl:Album;default', 18, false),)), $this); ?>
<!--Thickbox ThickBoxWithPrev-Next stuff-->
<script type="text/javascript" src="modules/Album/templates/db/js/jquery.js"></script>
<script type="text/javascript" src="modules/Album/templates/db/js/thickbox.js"></script>


<?php if ($this->_tpl_vars['pictureid'] != 0): ?>

<div style="text-align:center">
<p class="bigpicturecaption"><strong><?php echo $this->_tpl_vars['picture']->name; ?>
</strong><br />
<?php echo $this->_tpl_vars['picture']->comment; ?>
<br />
<span class="bigpicturenav">
<?php if ($this->_tpl_vars['link']['picture']['previous']): ?><a href="<?php echo $this->_tpl_vars['link']['picture']['previous']; ?>
" title="Previous picture">&lt; Previous</a><?php endif; ?>
 <span class= "albumpicturecount">( Picture <?php echo $this->_tpl_vars['picturenumber']; ?>
/<?php echo $this->_tpl_vars['picturecount']; ?>
 )</span> 
<?php if ($this->_tpl_vars['link']['picture']['next']): ?><a href="<?php echo $this->_tpl_vars['link']['picture']['next']; ?>
" title="Next picture">Next &gt;</a></span><?php endif; ?>
</p>
<img src="<?php echo $this->_tpl_vars['picture']->picture; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['picture']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['picture']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"  title="<?php echo ((is_array($_tmp=$this->_tpl_vars['picture']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
  - <?php echo ((is_array($_tmp=$this->_tpl_vars['picture']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
</div>
<?php endif; ?>

<?php if (! $this->_tpl_vars['album']): ?>
<ul class="albumlist">
	<?php $_from = $this->_tpl_vars['albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['album']):
?>
	<li class="thumb">
 	<a href="<?php echo $this->_tpl_vars['album']->link; ?>
">
<img src="<?php echo $this->_tpl_vars['album']->thumbnail; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['album']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['album']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['album']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php echo $this->_tpl_vars['album']->autothumbnailsize; ?>
 /></a>

<p class="albumname"><?php echo $this->_tpl_vars['album']->name; ?>
<br />
<span class="albumpicturecount">(<?php echo $this->_tpl_vars['album']->picturecount; ?>
 images)</span><br />
<span class="albumcomment"><?php echo $this->_tpl_vars['album']->comment; ?>
</span></p>
</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php else: ?>

<p><span class="noprint">Click on a thumbnail to view a larger image. Click anywhere on the larger image or use the 'Esc' (escape) key to close it. Use the 'next' and 'previous' links or the '&lt;' or '&gt;' (more than/less than keys) to navigate the larger images. <br/><?php if ($this->_tpl_vars['returnlink']): ?><a href="<?php echo $this->_tpl_vars['returnlink']; ?>
">Return to the album index page</a><?php endif; ?></span></p>
	<?php if ($this->_tpl_vars['pagecount'] > 1): ?>
	<p class="albumnav">
		<a href="<?php echo $this->_tpl_vars['link']['page']['first']; ?>
" title="first page">&lt;&lt;&nbsp;</a>
		<?php if ($this->_tpl_vars['link']['page']['previous']): ?><a href="<?php echo $this->_tpl_vars['link']['page']['previous']; ?>
" title="previous page">&lt;&nbsp;</a><?php endif; ?>
		page <?php echo $this->_tpl_vars['pagenumber']; ?>
/<?php echo $this->_tpl_vars['pagecount']; ?>

		<?php if ($this->_tpl_vars['link']['page']['next']): ?><a href="<?php echo $this->_tpl_vars['link']['page']['next']; ?>
" title="next page">&nbsp;&gt;</a><?php endif; ?>
		<a href="<?php echo $this->_tpl_vars['link']['page']['last']; ?>
" title="last page">&nbsp;&gt;&gt;</a>
	</p>
	<?php endif; ?>
<h3><?php echo $this->_tpl_vars['album']->name; ?>
</h3>
<?php echo $this->_tpl_vars['album']->comment; ?>

<ul class="picturelist">
	<?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picturesrow']):
?>
	    <?php $_from = $this->_tpl_vars['picturesrow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['onepicture']):
?>
	    <li class="thumb"><a href="<?php echo $this->_tpl_vars['onepicture']->picture; ?>
" rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['album']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="thickbox" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"> <img src="<?php echo $this->_tpl_vars['onepicture']->thumbnail; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['onepicture']->comment)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php echo $this->_tpl_vars['onepicture']->autothumbnailsize; ?>
 /></a>
   	   </li>

      <?php if (( $this->_tpl_vars['onepicture']->number == $this->_tpl_vars['picturenumber'] && ! $this->_tpl_vars['picture'] )): ?><?php $this->assign('picture', $this->_tpl_vars['onepicture']); ?><?php endif; ?>
	    <?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['picturecount'] == 0): ?>No image<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['picture']->id > 0): ?>
<?php endif; ?>
<div style="clear:both"></div> 