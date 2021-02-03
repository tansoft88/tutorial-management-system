<div class="employmentTitles form">
<?php echo $this->Form->create('EmploymentTitle');?>
	<fieldset>
		<legend><?php echo __('Edit Employment Title'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmploymentTitle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmploymentTitle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employment Titles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Staff Details'), array('controller' => 'staff_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
