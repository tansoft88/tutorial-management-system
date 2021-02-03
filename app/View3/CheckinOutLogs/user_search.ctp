  <html>
    <head>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery.validate.js" type="text/javascript"></script>
    </head>

  
  <div class="staffDetails form">
  <div id = "content">
<?php	echo $this->Form->create('CheckinOutLog',array('action' => 'user_search'));?>
	<fieldset>
	<legend><b><?php echo __('Search By Ecnumber or Barcode Scanner'); ?></b></legend>
	<table>
  <tr><th>
 <?php echo $this->Form->label('Search By:');?>
	</th><td>	
	<?php
	$options = array('ecnumber'=>'EC Number');
	echo $this->Form->select('search_by',$options, array('empty'=>'Ecnumber','selected'=>false));
	// echo $this->Form->select('search_by',$options, array('empty'=>'Please Select','selected'=>false));
	?>	
	</td><td>	
	<?php
	echo $this->Form->input('search',array('label'=>false,'AutoComplete'=>'off'));?></td><td><?php
	//echo $this->Form->input('entryID',array('type'=>'hidden','value'=>$entryID));
	echo $this->Form->end(__('Search')); ?> </td></tr></table>
	
	<?php 
	 echo "<br />";
	 echo  $this->Html->link(__('SEARCH BY BARCODE SCANNER'), array('controller'=>'Checkin_out_logs','action' => 'use_barcode')); ?>
	<?php
	if(isset($userinfo)){
	 ?>
	
    </fieldset>&nbsp;
	
    <fieldset>
	<legend><b><?php echo __('STAFF DETAILS'); ?></b></legend>
	
	<table width="50%" border="1" align= "center">
	<tr>

	<th width="18%" style="white-space:nowrap;"><?php echo __('EC Number'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Title'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Firstname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Lastname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Current Status'); ?></th>
	
	<?php if ($checkID == 0){?>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Check In'); ?></th>
	<?php }?>
	    <?php if ($checkID == 1){?>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Check Out'); ?></th> 
	<?php }?>
	</tr>
<?php for($i=0; $i < sizeof($userinfo); $i++ ){?>
<tr>
	<td><?php echo $userinfo[$i]['StaffDetail']['ecnumber'] ?></td>	
	<td><?php echo $userinfo[$i]['StaffDetail']['title'] ?></td>	
	<td><?php echo $userinfo[$i]['StaffDetail']['firstname']?></td>
	<td><?php echo $userinfo[$i]['StaffDetail']['lastname']?></td>
	<?php if ($checkID == 1){?>
	<td><?php echo 'CHECKED IN'; ?></td>
	<?php }?>
	<?php if ($checkID == 0){?>
	<td><?php echo 'CHECKED OUT'; ?></td>
	<?php }?>
	
	 <?php if ($checkID == 0){?>
 
  <td><?php echo $this->Html->link('Check In', array('action' => 'check_in',$userinfo[$i]['StaffDetail']['id'],$userinfo[$i]['StaffDetail']['ecnumber'])); ?>   </td>
 <?php }?>
 <?php if ($checkID == 1){?>
 <td><?php echo $this->Html->link('Check Out', array('action' => 'check_out',$userinfo[$i]['StaffDetail']['id'],$userinfo[$i]['StaffDetail']['ecnumber'])); ?>   </td>	
<?php }?>	
	</tr>
  <?php } ?>
  </table></fieldset>

	</div>
	 
<table>
	 </table>
		
	<?php
	}
	 ?>
  		
</html>