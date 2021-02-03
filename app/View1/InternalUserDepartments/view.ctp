<div class="internalUserDepartments view">
<h2><?php  echo __('Internal User Department');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department Code'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['department_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Ip'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['create_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify Ip'); ?></dt>
		<dd>
			<?php echo h($internalUserDepartment['InternalUserDepartment']['modify_ip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Internal User Department'), array('action' => 'edit', $internalUserDepartment['InternalUserDepartment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Internal User Department'), array('action' => 'delete', $internalUserDepartment['InternalUserDepartment']['id']), null, __('Are you sure you want to delete # %s?', $internalUserDepartment['InternalUserDepartment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal User Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal User Department'), array('action' => 'add')); ?> </li>
	</ul>
</div>
