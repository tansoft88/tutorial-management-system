<div class="employmentJobTittles view">
<h2><?php  echo __('Employment Job Tittle');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employmentJobTittle['EmploymentJobTittle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employmentJobTittle['EmploymentJobTittle']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($employmentJobTittle['EmploymentJobTittle']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment Job Tittle'), array('action' => 'edit', $employmentJobTittle['EmploymentJobTittle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment Job Tittle'), array('action' => 'delete', $employmentJobTittle['EmploymentJobTittle']['id']), null, __('Are you sure you want to delete # %s?', $employmentJobTittle['EmploymentJobTittle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Job Tittles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Job Tittle'), array('action' => 'add')); ?> </li>
	</ul>
</div>
