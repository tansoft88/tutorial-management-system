<?php if($current_user['system_group_id']==1){  //Superuser?>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		
<ul><h3>	
		
	<li><?php echo $this->Html->link(__('Students Per Category'), array('controller'=>'StaffDetails','action' => 'dptmnt_studs'));  ?></li>
		<?php // echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));  ?>
		<?php // echo $this->Html->link(__('Staff'), array('controller'=>'StaffDetails','action' => 'index'));  ?>
		<li><?php echo $this->Html->link(__('Students Who Submitted Assignments'), array('controller'=>'StaffDetails','action' => 'index_stud'));  ?></li>
	
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==2){//HR Admin ?>
</br>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
	
<ul><h3>
<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Users'), array('controller'=>'Users','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Entry Points'), array('controller'=>'EntryPoints','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Facultys'), array('controller'=>'Faculties','action' => 'index'));?></li>
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==3){ //HR Assistant Admin?>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
	
<ul><h3>
		<li><?php echo $this->Html->link(__('View Assignments History'), array('controller'=>'Departments','action' => '#'));  ?></li>
		<br />
		<li><?php echo $this->Html->link(__('Submit Assignments'), array('controller'=>'StaffDetails','action' => 'submit_ass'));  ?></li>
		
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==4){ // check in and out user?>
<fieldset>
		<legend><b><?php echo __('Check In and Out'); ?></b></legend>
			<br />
		
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==5){ // ordinary user?>
<fieldset>
		<legend><b><?php echo __('Check In and Out'); ?></b></legend>
			<br />
	
		<ul><h3>
		<li><?php echo $this->Html->link(__('Check In/Out Statistics'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs2'));  ?></li>
		
		
		
	
      </h3>
</ul>
</fieldset>
<?php }?>