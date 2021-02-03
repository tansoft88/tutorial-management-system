<div class="passwordParameters form">
<?php echo $this->Form->create('PasswordParameter');?>
	<fieldset>
		<legend><?php echo __('Edit Password Parameter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('min_length');
		echo $this->Form->input('max_lifespan');
		echo $this->Form->input('rqr_special_chars');
		echo $this->Form->input('rqr_numbers');
		echo $this->Form->input('rqr_uppercase_letter');
		echo $this->Form->input('password_expires');
		echo $this->Form->input('lookback_period');
		echo $this->Form->input('created_by');
		echo $this->Form->input('create_ip');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('modify_ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PasswordParameter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PasswordParameter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Password Parameters'), array('action' => 'index'));?></li>
	</ul>
</div>
