<div class="passwordParameters view">
<h2><?php  echo __('Password Parameter');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Length'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['min_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Lifespan'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['max_lifespan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rqr Special Chars'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['rqr_special_chars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rqr Numbers'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['rqr_numbers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rqr Uppercase Letter'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['rqr_uppercase_letter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Expires'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['password_expires']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lookback Period'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['lookback_period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Ip'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['create_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify Ip'); ?></dt>
		<dd>
			<?php echo h($passwordParameter['PasswordParameter']['modify_ip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Password Parameter'), array('action' => 'edit', $passwordParameter['PasswordParameter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Password Parameter'), array('action' => 'delete', $passwordParameter['PasswordParameter']['id']), null, __('Are you sure you want to delete # %s?', $passwordParameter['PasswordParameter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Password Parameters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Password Parameter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
