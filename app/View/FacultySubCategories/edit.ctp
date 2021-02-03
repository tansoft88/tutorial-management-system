<div class="facultySubCategories form">
<?php echo $this->Form->create('FacultySubCategory');?>
	<fieldset>
		<legend><?php echo __('Edit Faculty Sub Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FacultySubCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FacultySubCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Faculty Sub Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
	</ul>
</div>
