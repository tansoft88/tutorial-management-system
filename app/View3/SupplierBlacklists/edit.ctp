<div class="supplierBlacklists form">
<?php echo $this->Form->create('SupplierBlacklist');?>
	<fieldset>
		<legend><?php echo __('Edit Supplier Blacklist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('supplier_email_addess');
		echo $this->Form->input('blacklist_reason_id');
		echo $this->Form->input('blacklisting_reversed');
		echo $this->Form->input('date_of_reversal');
		echo $this->Form->input('blacklist_reversal_reason_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('create_ip');
		echo $this->Form->input('modify_ip');
		echo $this->Form->input('reversal_timestamp');
		echo $this->Form->input('reversed_by');
		echo $this->Form->input('reversal_ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SupplierBlacklist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SupplierBlacklist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Supplier Blacklists'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Blacklist Reasons'), array('controller' => 'blacklist_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reason'), array('controller' => 'blacklist_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklist Reversal Reasons'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reversal Reason'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
