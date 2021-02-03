<div class="employmentJobTittles form">
<?php echo $this->Form->create('EmploymentJobTittle');?>
	<fieldset>
		<legend><?php echo __('Add Employment Job Tittle'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employment Job Tittles'), array('action' => 'index'));?></li>
	</ul>
</div>
