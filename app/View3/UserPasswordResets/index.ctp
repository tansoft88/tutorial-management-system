<div class="userPasswordResets index">
	<h2><?php echo __('User Password Resets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email_address');?></th>
			<th><?php echo $this->Paginator->sort('reset_token_hash');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('token_expiry_date');?></th>
			<th><?php echo $this->Paginator->sort('token_used');?></th>
			<th><?php echo $this->Paginator->sort('token_overriden');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userPasswordResets as $userPasswordReset): ?>
	<tr>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['id']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['reset_token_hash']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['created']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['token_expiry_date']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['token_used']); ?>&nbsp;</td>
		<td><?php echo h($userPasswordReset['UserPasswordReset']['token_overriden']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userPasswordReset['UserPasswordReset']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userPasswordReset['UserPasswordReset']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userPasswordReset['UserPasswordReset']['id']), null, __('Are you sure you want to delete # %s?', $userPasswordReset['UserPasswordReset']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Password Reset'), array('action' => 'add')); ?></li>
	</ul>
</div>
