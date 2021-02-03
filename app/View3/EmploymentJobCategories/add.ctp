<div class="employmentJobCategories form">
<?php echo $this->Form->create('EmploymentJobCategory');?>
	<fieldset>
		<legend><?php echo __('Add Employment Job Category'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Employment Job Categories'), array('action' => 'index'));?></li>
	</ul>
</div>
