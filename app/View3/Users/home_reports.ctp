<?php if($current_user['system_group_id']==1){ //Superuser?>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
		<legend><b><?php echo __('Location:  ' .$entryName); ?></b></legend>
<ul><h3>
		<li><?php echo $this->Html->link(__('Individual Attendance Logs'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs'));  ?></li>
		<?php // echo $this->Html->link(__('Department Attendance Logs'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs'));  ?>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Staff'), array('controller'=>'StaffDetails','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Entry Points'), array('controller'=>'EntryPoints','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Facultys'), array('controller'=>'Faculties','action' => 'index'));?></li>
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==2){ //HR Admin?>
</br>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
		<legend><b><?php echo __('Location:  ' .$entryName); ?></b></legend>
<ul><h3>
		<li><?php echo $this->Html->link(__('Staff Statistics'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs'));  ?></li>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Users'), array('controller'=>'Users','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Entry Points'), array('controller'=>'EntryPoints','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Facultys'), array('controller'=>'Faculties','action' => 'index'));?></li>
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==5){ //Ordinary User?>
</br>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
		<legend><b><?php echo __('Location:  ' .$entryName); ?></b></legend>
<ul><h3>
		<li><?php echo $this->Html->link(__('Staff Statistics'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs'));  ?></li>
	
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==3){ //HR Assistant Admin?>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
		<legend><b><?php echo __('Location:  ' .$entryName); ?></b></legend>
<ul><h3>
		<li><?php echo $this->Html->link(__('Staff Statistics'), array('controller'=>'CheckinOutLogs','action' => 'search_staff_logs'));  ?></li>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Users'), array('controller'=>'Users','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Entry Points'), array('controller'=>'EntryPoints','action' => 'index'));  ?></li>
		<li><?php echo $this->Html->link(__('Facultys'), array('controller'=>'Faculties','action' => 'index'));?></li>
      </h3>
</ul>
</fieldset>
<?php }?>
<?php if($current_user['system_group_id']==4){ // check in and out user?>
<fieldset>
		<legend><b><?php echo __('Reports'); ?></b></legend>
		<br />
		<legend><b><?php echo __('Location:  ' .$entryName); ?></b></legend>
<ul><h3>

	    
	  </h3>
</ul>
</fieldset>
<?php }?>