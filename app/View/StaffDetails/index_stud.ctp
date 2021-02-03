
<h2><?php echo __('Student Details');?></h2>
<?php echo "<br />";	
 echo $this->Form->create('StaffDetails',array('action' => 'index_stud_excel'));
/* echo $this->Form->input('ecnumber',array('type'=>'hidden','value'=>$ecnumber));
 echo $this->Form->input('kaYrFrm',array('type'=>'hidden','value'=>$kaYrFrm));
 echo $this->Form->input('kaMnthFrm',array('type'=>'hidden','value'=>$kaMnthFrm));
 echo $this->Form->input('kaDayFrm',array('type'=>'hidden','value'=>$kaDayFrm));
 echo $this->Form->input('kaYrTo',array('type'=>'hidden','value'=>$kaYrTo));
 echo $this->Form->input('kaMnthTo',array('type'=>'hidden','value'=>$kaMnthTo));
 echo $this->Form->input('kaDayTo',array('type'=>'hidden','value'=>$kaDayTo));*/
 echo $this->Form->end('Download Excel Of The Report'); 
 echo "<br />"; 
	?>

<table width="50%" border="1" align= "center">
	<tr>

	<th width="18%" style="white-space:nowrap;"><?php echo __('Title'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Firstname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Lastname'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('ID Number'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Mobile'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Programme'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Start Date'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('End Date'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Email'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Download'); ?></th>
	<th width="18%" style="white-space:nowrap;"><?php echo __('Actions'); ?></th>
	 </tr>
<?php 

for($i=0; $i < sizeof($studData); $i++ ){?>
<tr>
	<td><?php echo $studData[$i]['StudentDetail']['title'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['firstname'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['surname'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['id_number'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['mobile'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['programme'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['from_date'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['to_date'] ?></td>	
	<td><?php echo $studData[$i]['StudentDetail']['email_address'] ?></td>
<td>
<?php echo $this->Form->postLink(__('Download'), array('action' => 'download_files',$studData[$i]['StudentDetail']['id_number'],$studData[$i]['StudentDetail']['email_address'])); ?>
		</td>	
	<td><?php echo $this->Html->link(__('View'), array('action' => '#', $studData[$i]['StudentDetail']['id'])); ?></td>

	<?php } ?>
  </table>
  
  <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add Students'), array('action' => 'add_stud')); ?></li>
	</ul>
</div>
  
  
  