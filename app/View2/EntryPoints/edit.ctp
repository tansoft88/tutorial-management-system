<div class="entryPoints form">
<?php echo $this->Form->create('EntryPoint');?>
	<fieldset>
		<legend><?php echo __('Edit Entry Point'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EntryPoint.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EntryPoint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Points'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Checkin Out Logs'), array('controller' => 'checkin_out_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkin Out Log'), array('controller' => 'checkin_out_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
