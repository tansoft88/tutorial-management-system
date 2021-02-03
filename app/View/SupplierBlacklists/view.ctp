<div class="supplierBlacklists view">
<h2><?php  echo __('Supplier Blacklist');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Email Addess'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['supplier_email_addess']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blacklist Reason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierBlacklist['BlacklistReason']['id'], array('controller' => 'blacklist_reasons', 'action' => 'view', $supplierBlacklist['BlacklistReason']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blacklisting Reversed'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['blacklisting_reversed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Reversal'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['date_of_reversal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blacklist Reversal Reason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierBlacklist['BlacklistReversalReason']['id'], array('controller' => 'blacklist_reversal_reasons', 'action' => 'view', $supplierBlacklist['BlacklistReversalReason']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Ip'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['create_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify Ip'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['modify_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reversal Timestamp'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['reversal_timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reversed By'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['reversed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reversal Ip'); ?></dt>
		<dd>
			<?php echo h($supplierBlacklist['SupplierBlacklist']['reversal_ip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier Blacklist'), array('action' => 'edit', $supplierBlacklist['SupplierBlacklist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier Blacklist'), array('action' => 'delete', $supplierBlacklist['SupplierBlacklist']['id']), null, __('Are you sure you want to delete # %s?', $supplierBlacklist['SupplierBlacklist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Blacklists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Blacklist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklist Reasons'), array('controller' => 'blacklist_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reason'), array('controller' => 'blacklist_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklist Reversal Reasons'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist Reversal Reason'), array('controller' => 'blacklist_reversal_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
