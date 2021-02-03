<div class="employmentJobCategories view">
<h2><?php  echo __('Employment Job Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employmentJobCategory['EmploymentJobCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employmentJobCategory['EmploymentJobCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($employmentJobCategory['EmploymentJobCategory']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment Job Category'), array('action' => 'edit', $employmentJobCategory['EmploymentJobCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment Job Category'), array('action' => 'delete', $employmentJobCategory['EmploymentJobCategory']['id']), null, __('Are you sure you want to delete # %s?', $employmentJobCategory['EmploymentJobCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Job Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Job Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
