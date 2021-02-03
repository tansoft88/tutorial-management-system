<div class="loginAudits view">
<h2><?php  echo __('Login Audit');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loginAudit['LoginAudit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($loginAudit['LoginAudit']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Computer Ip'); ?></dt>
		<dd>
			<?php echo h($loginAudit['LoginAudit']['computer_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login Timestamp'); ?></dt>
		<dd>
			<?php echo h($loginAudit['LoginAudit']['login_timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Login Audit'), array('action' => 'edit', $loginAudit['LoginAudit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Login Audit'), array('action' => 'delete', $loginAudit['LoginAudit']['id']), null, __('Are you sure you want to delete # %s?', $loginAudit['LoginAudit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Login Audits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Login Audit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
