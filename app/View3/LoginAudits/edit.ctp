<div class="loginAudits form">
<?php echo $this->Form->create('LoginAudit');?>
	<fieldset>
		<legend><?php echo __('Edit Login Audit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('computer_ip');
		echo $this->Form->input('login_timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LoginAudit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LoginAudit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Login Audits'), array('action' => 'index'));?></li>
	</ul>
</div>
