<div class="entryPoints form">
<?php echo $this->Form->create('EntryPoint');?>
	<fieldset>
		<legend><?php echo __('Add Entry Point'); ?></legend>
	<?php
		echo $this->Form->input('name');
		
		echo "<br>";
		echo $this->Form->label('Check IN and OUT');
		$check_in=array('1'=>'YES','0'=>'NO');
		echo $this->Form->select('check_in',$check_in,array('empty'=>'--Please Select--','selected'=>false));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entry Points'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Checkin Out Logs'), array('controller' => 'checkin_out_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkin Out Log'), array('controller' => 'checkin_out_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
