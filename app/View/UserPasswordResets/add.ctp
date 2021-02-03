<div class="userPasswordResets form">
<?php echo $this->Form->create('UserPasswordReset');?>
	<fieldset>
		<legend><?php echo __('Add User Password Reset'); ?></legend>
	<?php
		echo $this->Form->input('email_address');
		echo $this->Form->input('reset_token_hash');
		echo $this->Form->input('token_expiry_date');
		echo $this->Form->input('token_used');
		echo $this->Form->input('token_overriden');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Password Resets'), array('action' => 'index'));?></li>
	</ul>
</div>
