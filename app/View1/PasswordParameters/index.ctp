<div class="passwordParameters index">
	<h2><?php echo __('Password Parameters');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('min_length');?></th>
			<th><?php echo $this->Paginator->sort('max_lifespan');?></th>
			<th><?php echo $this->Paginator->sort('rqr_special_chars');?></th>
			<th><?php echo $this->Paginator->sort('rqr_numbers');?></th>
			<th><?php echo $this->Paginator->sort('rqr_uppercase_letter');?></th>
			<th><?php echo $this->Paginator->sort('password_expires');?></th>
			<th><?php echo $this->Paginator->sort('lookback_period');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('create_ip');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('modify_ip');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($passwordParameters as $passwordParameter): ?>
	<tr>
		<td><?php echo h($passwordParameter['PasswordParameter']['id']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['min_length']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['max_lifespan']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['rqr_special_chars']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['rqr_numbers']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['rqr_uppercase_letter']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['password_expires']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['lookback_period']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['created']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['create_ip']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['modified']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($passwordParameter['PasswordParameter']['modify_ip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $passwordParameter['PasswordParameter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $passwordParameter['PasswordParameter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $passwordParameter['PasswordParameter']['id']), null, __('Are you sure you want to delete # %s?', $passwordParameter['PasswordParameter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Password Parameter'), array('action' => 'add')); ?></li>
	</ul>
</div>
