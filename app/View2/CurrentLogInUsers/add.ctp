<div class="currentLogInUsers form">
<?php echo $this->Form->create('CurrentLogInUser');?>
	<fieldset>
		<legend><?php echo __('Add Current Log In User'); ?></legend>
	<?php
		echo $this->Form->input('ecnumber');
		echo $this->Form->input('time_logged');
		echo $this->Form->input('entry_point');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Current Log In Users'), array('action' => 'index'));?></li>
	</ul>
</div>
