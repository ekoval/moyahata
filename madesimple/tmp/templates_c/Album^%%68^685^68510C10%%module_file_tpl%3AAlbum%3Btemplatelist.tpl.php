<?php /* Smarty version 2.6.25, created on 2011-07-28 15:47:22
         compiled from module_file_tpl:Album%3Btemplatelist.tpl */ ?>
<?php echo $this->_tpl_vars['formstart']; ?>

<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['templatetext']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['templateinput']; ?>
<?php echo $this->_tpl_vars['submit']; ?>
</p>
</div>
<?php echo $this->_tpl_vars['formend']; ?>

<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th><?php echo $this->_tpl_vars['templatenametext']; ?>
</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
" onmouseover="this.className='<?php echo $this->_tpl_vars['entry']->rowclass; ?>
hover';" onmouseout="this.className='<?php echo $this->_tpl_vars['entry']->rowclass; ?>
';">
			<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->deletelink; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>

<div class="pageoptions">
	<p class="pageoptions"><?php echo $this->_tpl_vars['addlink']; ?>
</p>
</div>