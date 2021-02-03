<div class="entryPoints form">
<?php echo $this->Form->create('Faculty');?>
	<fieldset>
		<legend><?php echo __('Add Faculty'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('faculty_sub_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Faculties'), array('action' => 'index'));?></li>
	</ul>
</div>
