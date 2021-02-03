<div class="forceCheckoutLogs view">
<h2><?php  echo __('Force Checkout Log');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ecnumber'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['ecnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($forceCheckoutLog['EntryPoint']['name'], array('controller' => 'entry_points', 'action' => 'view', $forceCheckoutLog['EntryPoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forced Date'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forced Reason'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forced By'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['forced_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($forceCheckoutLog['ForceCheckoutLog']['ip_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Force Checkout Log'), array('action' => 'edit', $forceCheckoutLog['ForceCheckoutLog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Force Checkout Log'), array('action' => 'delete', $forceCheckoutLog['ForceCheckoutLog']['id']), null, __('Are you sure you want to delete # %s?', $forceCheckoutLog['ForceCheckoutLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Force Checkout Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Force Checkout Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Points'), array('controller' => 'entry_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Point'), array('controller' => 'entry_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
