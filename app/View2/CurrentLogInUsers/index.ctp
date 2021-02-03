<div class="currentLogInUsers index">
	<h2><?php echo __('Current Log In Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ecnumber');?></th>
			<th><?php echo $this->Paginator->sort('time_logged');?></th>
			<th><?php echo $this->Paginator->sort('entry_point');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($currentLogInUsers as $currentLogInUser): ?>
	<tr>
		<td><?php echo h($currentLogInUser['CurrentLogInUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($currentLogInUser['CurrentLogInUser']['ecnumber']); ?>&nbsp;</td>
		<td><?php echo h($currentLogInUser['CurrentLogInUser']['time_logged']); ?>&nbsp;</td>
		<td><?php echo h($currentLogInUser['CurrentLogInUser']['entry_point']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currentLogInUser['CurrentLogInUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currentLogInUser['CurrentLogInUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $currentLogInUser['CurrentLogInUser']['id']), null, __('Are you sure you want to delete # %s?', $currentLogInUser['CurrentLogInUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Current Log In User'), array('action' => 'add')); ?></li>
	</ul>
</div>
