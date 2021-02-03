<div class="internalUserDepartments form">
<?php echo $this->Form->create('InternalUserDepartment');?>
	<fieldset>
		<legend><?php echo __('Edit Internal User Department'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email_address');
		echo $this->Form->input('department_code');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('create_ip');
		echo $this->Form->input('modify_ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InternalUserDepartment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InternalUserDepartment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Internal User Departments'), array('action' => 'index'));?></li>
	</ul>
</div>
