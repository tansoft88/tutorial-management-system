<div class="entryPoints view">
<h2><?php  echo __('Entry Point');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entryPoint['EntryPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($entryPoint['EntryPoint']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Point'), array('action' => 'edit', $entryPoint['EntryPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entry Point'), array('action' => 'delete', $entryPoint['EntryPoint']['id']), null, __('Are you sure you want to delete # %s?', $entryPoint['EntryPoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkin Out Logs'), array('controller' => 'checkin_out_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkin Out Log'), array('controller' => 'checkin_out_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Checkin Out Logs');?></h3>
	<?php if (!empty($entryPoint['CheckinOutLog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entry Point Id'); ?></th>
		<th><?php echo __('Ecnumber'); ?></th>
		<th><?php echo __('Time In'); ?></th>
		<th><?php echo __('Checkin User Id'); ?></th>
		<th><?php echo __('Time Out'); ?></th>
		<th><?php echo __('Checkout User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entryPoint['CheckinOutLog'] as $checkinOutLog): ?>
		<tr>
			<td><?php echo $checkinOutLog['id'];?></td>
			<td><?php echo $checkinOutLog['entry_point_id'];?></td>
			<td><?php echo $checkinOutLog['ecnumber'];?></td>
			<td><?php echo $checkinOutLog['time_in'];?></td>
			<td><?php echo $checkinOutLog['checkin_user_id'];?></td>
			<td><?php echo $checkinOutLog['time_out'];?></td>
			<td><?php echo $checkinOutLog['checkout_user_id'];?></td>
			<td><?php echo $checkinOutLog['created'];?></td>
			<td><?php echo $checkinOutLog['ip_address'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'checkin_out_logs', 'action' => 'view', $checkinOutLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'checkin_out_logs', 'action' => 'edit', $checkinOutLog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'checkin_out_logs', 'action' => 'delete', $checkinOutLog['id']), null, __('Are you sure you want to delete # %s?', $checkinOutLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Checkin Out Log'), array('controller' => 'checkin_out_logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
