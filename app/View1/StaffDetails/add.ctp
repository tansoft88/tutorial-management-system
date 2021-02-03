<div class="staffDetails form">
<?php echo $this->Form->create('StaffDetail');?>
	<fieldset>
		<legend><?php echo __('Add Staff Detail'); ?></legend>
	<?php
		    echo "<br />";
			echo $this->Form->label('Firstname');
			echo $this->Form->input('firstname', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Lastname');
			echo $this->Form->input('lastname', array('label' =>'<font color="red">*</font>','size'=>40));
		    echo "<br />";
			echo "<br />";
			echo $this->Form->label('Designation');
			echo $this->Form->input('designation', array('label' =>'<font color="red">*</font>','size'=>40));
		    echo "<br />";
			echo $this->Form->input('StaffDetail.title',  array('label' =>'Title','class' => 'title',
			'options' => array('empty'=>'Please Select','selected'=>false,'Dr'=>'Dr','Eng'=>'Eng','Miss'=>'Miss','Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms','Pastor'=>'Pastor','Prof'=>'Prof','Rev'=>'Rev','Sr'=>'Sr'),
					));
					
					
		
			echo "<br />";
			echo $this->Form->label('ECNumber');
			echo $this->Form->input('ecnumber', array('label' =>'<font color="red">*</font>','size'=>40));
		
			echo "<br />";
			  echo "<br />";
			echo $this->Form->label('Department');
			echo $this->Form->select('department_code',$dptmnts,array('empty'=>'--Please Select--','selected'=>false));
			echo "<br />";
		    /*echo "<br />";
			echo $this->Form->label('User Type');
			echo $this->Form->select('user_type',$user_type,array('empty'=>'--Please Select--','selected'=>false));
			echo "<br />";*/
			echo "<br />";
			echo $this->Form->label('Physical Address');
			echo $this->Form->input('physical_address', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Contact Address');
			echo $this->Form->input('contact_address', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Mobile');
			echo $this->Form->input('mobile', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Work Phone');
			echo $this->Form->input('work_phone', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Home Phone');
			echo $this->Form->input('home_phone', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			echo $this->Form->label('Email Address');
			echo $this->Form->input('email_address', array('label' =>'<font color="red">*</font>','size'=>40));
			echo "<br />";
			
			
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Staff Details'), array('action' => 'index'));?></li>
	</ul>
</div>

