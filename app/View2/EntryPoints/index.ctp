<div class="entryPoints index">
	<h2><?php echo __('Entry Points');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Entry Name</th>
			<th>Check In and Out</th>
			
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($entryPoints as $entryPoint):

	if($entryPoint['EntryPoint']['check_in'] == 1 ){
	$x = "ALLOWED";
	}
	if($entryPoint['EntryPoint']['check_in'] == 0 ){
	   $x = "NOT ALLOWED";
	   }

	?>
	<tr>
		<td><?php echo h($entryPoint['EntryPoint']['name']); ?>&nbsp;</td>
		<td><?php echo h($x); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entryPoint['EntryPoint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entryPoint['EntryPoint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entryPoint['EntryPoint']['id']), null, __('Are you sure you want to delete # %s?', $entryPoint['EntryPoint']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Entry Point'), array('action' => 'add')); ?></li>
	</ul>
</div>
