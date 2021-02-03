<div class="userPasswordResets view">
<h2><?php  echo __('User Password Reset');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reset Token Hash'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['reset_token_hash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Expiry Date'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['token_expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Used'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['token_used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Overriden'); ?></dt>
		<dd>
			<?php echo h($userPasswordReset['UserPasswordReset']['token_overriden']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Password Reset'), array('action' => 'edit', $userPasswordReset['UserPasswordReset']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Password Reset'), array('action' => 'delete', $userPasswordReset['UserPasswordReset']['id']), null, __('Are you sure you want to delete # %s?', $userPasswordReset['UserPasswordReset']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Password Resets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Password Reset'), array('action' => 'add')); ?> </li>
	</ul>
</div>
