<div class="facultySubCategories view">
<h2><?php  echo __('Faculty Sub Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facultySubCategory['FacultySubCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($facultySubCategory['FacultySubCategory']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($facultySubCategory['FacultySubCategory']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculty Sub Category'), array('action' => 'edit', $facultySubCategory['FacultySubCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faculty Sub Category'), array('action' => 'delete', $facultySubCategory['FacultySubCategory']['id']), null, __('Are you sure you want to delete # %s?', $facultySubCategory['FacultySubCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculty Sub Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty Sub Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Faculties');?></h3>
	<?php if (!empty($facultySubCategory['Faculty'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Faculty Sub Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($facultySubCategory['Faculty'] as $faculty): ?>
		<tr>
			<td><?php echo $faculty['id'];?></td>
			<td><?php echo $faculty['code'];?></td>
			<td><?php echo $faculty['name'];?></td>
			<td><?php echo $faculty['faculty_sub_category_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'faculties', 'action' => 'view', $faculty['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'faculties', 'action' => 'edit', $faculty['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'faculties', 'action' => 'delete', $faculty['id']), null, __('Are you sure you want to delete # %s?', $faculty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
