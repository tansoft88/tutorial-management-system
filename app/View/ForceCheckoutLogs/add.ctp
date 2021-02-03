<div class="forceCheckoutLogs form">
<?php echo $this->Form->create('ForceCheckoutLog');?>
	<fieldset>
		<legend><?php echo __('Add Force Checkout Log'); ?></legend>
	<?php
		echo $this->Form->input('ecnumber');
		echo $this->Form->input('entry_point_id');
		echo $this->Form->input('forced_date');
		echo $this->Form->input('forced_reason');
		echo $this->Form->input('forced_by');
		echo $this->Form->input('ip_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Force Checkout Logs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entry Points'), array('controller' => 'entry_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Point'), array('controller' => 'entry_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
