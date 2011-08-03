{$formstart}
<div class="pageoverflow">
	<p class="pagetext">{$templatetext}:</p>
	<p class="pageinput">{$templateinput}{$submit}</p>
</div>
{$formend}
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th>{$templatenametext}</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$items item=entry}
		<tr class="{$entry->rowclass}" onmouseover="this.className='{$entry->rowclass}hover';" onmouseout="this.className='{$entry->rowclass}';">
			<td>{$entry->name}</td>
			<td>{$entry->editlink}</td>
			<td>{$entry->deletelink}</td>
		</tr>
	{/foreach}
	</tbody>
</table>

<div class="pageoptions">
	<p class="pageoptions">{$addlink}</p>
</div>
