<div class="employmentTitles view">
<h2><?php  echo __('Employment Title');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employmentTitle['EmploymentTitle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employmentTitle['EmploymentTitle']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($employmentTitle['EmploymentTitle']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment Title'), array('action' => 'edit', $employmentTitle['EmploymentTitle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment Title'), array('action' => 'delete', $employmentTitle['EmploymentTitle']['id']), null, __('Are you sure you want to delete # %s?', $employmentTitle['EmploymentTitle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Titles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Title'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Details'), array('controller' => 'staff_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Staff Details');?></h3>
	<?php if (!empty($employmentTitle['StaffDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Ecnumber'); ?></th>
		<th><?php echo __('Department Code'); ?></th>
		<th><?php echo __('Physical Address'); ?></th>
		<th><?php echo __('Contact Address'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Work Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Employment Title Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employmentTitle['StaffDetail'] as $staffDetail): ?>
		<tr>
			<td><?php echo $staffDetail['id'];?></td>
			<td><?php echo $staffDetail['firstname'];?></td>
			<td><?php echo $staffDetail['lastname'];?></td>
			<td><?php echo $staffDetail['title'];?></td>
			<td><?php echo $staffDetail['ecnumber'];?></td>
			<td><?php echo $staffDetail['department_code'];?></td>
			<td><?php echo $staffDetail['physical_address'];?></td>
			<td><?php echo $staffDetail['contact_address'];?></td>
			<td><?php echo $staffDetail['mobile'];?></td>
			<td><?php echo $staffDetail['work_phone'];?></td>
			<td><?php echo $staffDetail['home_phone'];?></td>
			<td><?php echo $staffDetail['email_address'];?></td>
			<td><?php echo $staffDetail['employment_title_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staff_details', 'action' => 'view', $staffDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staff_details', 'action' => 'edit', $staffDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staff_details', 'action' => 'delete', $staffDetail['id']), null, __('Are you sure you want to delete # %s?', $staffDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
