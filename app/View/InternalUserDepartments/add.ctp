<div class="internalUserDepartments form">
<?php echo $this->Form->create('InternalUserDepartment');?>
	<fieldset>
		<legend><b><?php echo __('Add Internal User Department'); ?></b></legend>
	<?php
	echo "<br>";
		echo $this->Form->input('email_address',array('value'=>$email,'readonly'=>'readonly','size'=>'60'));
		echo "<br><br>";
		echo $this->Form->label('Department');
		echo $this->Form->select('department_code',$departments,array('empty'=>'--Please Select--','selected'=>false));
		echo "<br><br>"
		//echo $this->Form->input('department_code');
		//echo $this->Form->input('created_by');
		//echo $this->Form->input('modified_by');
		//echo $this->Form->input('create_ip');
		//echo $this->Form->input('modify_ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Internal User Departments'), array('action' => 'index'));?></li>
	</ul>
</div>
