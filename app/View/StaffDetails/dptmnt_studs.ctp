  <html>
    <head>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery.validate.js" type="text/javascript"></script>
    </head>

  
 
 
<?php	echo $this->Form->create('StaffDetail',array('action' => 'dptmnt_studs'));?>
	<fieldset>
	<legend><b><?php echo __('SEARCH BY DEPARTMENT'); ?></b></legend>
	<table>
  <tr>	
	<td>	
	<?php 
	        echo "<br />";
			echo $this->Form->label('Department');
			echo $this->Form->select('department_code',$dptmnts,array('empty'=>'--Please Select--','selected'=>false));
			echo "<br />";
	?>
	 </fieldset>&nbsp;
<?php	echo $this->Form->end(__('Search')); ?></td></tr></table>
	<?php if(isset($studData)){
echo "<br />";
	?>
   
	
	<legend><b><?php echo __($dptmntNm.'   STUDENTS LIST' ); ?></b></legend>
	
	<?php 	
	echo "<br />";	
	echo $this->Form->create('StaffDetail',array('action' => 'dptmnt_studs_excel'));
	echo $this->Form->input('dptmnts',array('type'=>'hidden','value'=>$dpmnt_code));
	echo $this->Form->end('Download Excel Of The Report'); 
	?>
	&nbsp;
	<table width="50%" border="1" align= "center">
	<tr>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Title'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Firstname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Lastname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Mobile'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Programme'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Department'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Start Date'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('End Date'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Email'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Download'); ?></th>
	</tr>
	
<?php for($i=0; $i < sizeof($studData); $i++ ){?>
<tr>
	<td><?php echo $studData[$i]['StudentDetail']['title'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['firstname'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['surname'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['mobile'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['programme'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['department_code'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['from_date'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['to_date'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['email_address'] ?></td>	
	<td>
<?php echo $this->Form->postLink(__('Download'), array('action' => 'download_files',$studData[$i]['StudentDetail']['id_number'],$studData[$i]['StudentDetail']['email_address'])); ?>
		</td>
	</tr>
	<?php
	    }
	 ?> 
</table>	 
</fieldset>&nbsp;
<br />
	<?php				
	}	
	?>