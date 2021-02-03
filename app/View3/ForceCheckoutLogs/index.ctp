<div class="forceCheckoutLogs index">
	<h2><?php echo __('Force Checkout Logs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ecnumber');?></th>
			<th><?php echo $this->Paginator->sort('entry_point_id');?></th>
			<th><?php echo $this->Paginator->sort('forced_date');?></th>
			<th><?php echo $this->Paginator->sort('forced_reason');?></th>
			<th><?php echo $this->Paginator->sort('forced_by');?></th>
			<th><?php echo $this->Paginator->sort('ip_address');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($forceCheckoutLogs as $forceCheckoutLog): ?>
	<tr>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['id']); ?>&nbsp;</td>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['ecnumber']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forceCheckoutLog['EntryPoint']['name'], array('controller' => 'entry_points', 'action' => 'view', $forceCheckoutLog['EntryPoint']['id'])); ?>
		</td>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_date']); ?>&nbsp;</td>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_reason']); ?>&nbsp;</td>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_by']); ?>&nbsp;</td>
		<td><?php echo h($forceCheckoutLog['ForceCheckoutLog']['ip_address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $forceCheckoutLog['ForceCheckoutLog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $forceCheckoutLog['ForceCheckoutLog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $forceCheckoutLog['ForceCheckoutLog']['id']), null, __('Are you sure you want to delete # %s?', $forceCheckoutLog['ForceCheckoutLog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Force Checkout Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Points'), array('controller' => 'entry_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Point'), array('controller' => 'entry_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
