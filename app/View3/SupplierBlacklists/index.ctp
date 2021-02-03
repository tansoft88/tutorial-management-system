<div class="supplierBlacklists index">
	<h2><?php echo __('Supplier Blacklists');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('supplier_email_addess');?></th>
			<th><?php echo $this->Paginator->sort('blacklist_reason_id');?></th>
			<th><?php echo $this->Paginator->sort('blacklisting_reversed');?></th>
			<th><?php echo $this->Paginator->sort('date_of_reversal');?></th>
			<th><?php echo $this->Paginator->sort('blacklist_reversal_reason_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('create_ip');?></th>
			<th><?php echo $this->Paginator->sort('modify_ip');?></th>
			<th><?php echo $this->Paginator->sort('reversal_timestamp');?></th>
			<th><?php echo $this->Paginator->sort('reversed_by');?></th>
			<th><?php echo $this->Paginator->sort('reversal_ip');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($supplierBlacklists as $supplierBlacklist): ?>
	<tr>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['supplier_email_addess']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($supplierBlacklist['BlacklistReason']['id'], array('controller' => 'blacklist_reasons', 'action' => 'view', $supplierBlacklist['BlacklistReason']['id'])); ?>
		</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['blacklisting_reversed']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['date_of_reversal']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($supplierBlacklist['BlacklistReversalReason']['id'], array('controller' => 'blacklist_reversal_reasons', 'action' => 'view', $supplierBlacklist['BlacklistReversalReason']['id'])); ?>
		</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['created']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['modified']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['create_ip']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['modify_ip']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['reversal_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['reversed_by']); ?>&nbsp;</td>
		<td><?php echo h($supplierBlacklist['SupplierBlacklist']['reversal_ip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $supplierBlacklist['SupplierBlacklist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplierBlacklist['SupplierBlacklist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplierBlacklist['SupplierBlacklist']['id']), null, __('Are you sure you want to delete # %s?', $supplierBlacklist['SupplierBlacklist']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Supplier Blacklist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blacklist Reasons'), array('controller' => 'blacklist_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reason'), array('controller' => 'blacklist_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklist Reversal Reasons'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reversal Reason'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
