<div class="currentLogInUsers view">
<h2><?php  echo __('Current Log In User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($currentLogInUser['CurrentLogInUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ecnumber'); ?></dt>
		<dd>
			<?php echo h($currentLogInUser['CurrentLogInUser']['ecnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Logged'); ?></dt>
		<dd>
			<?php echo h($currentLogInUser['CurrentLogInUser']['time_logged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Point'); ?></dt>
		<dd>
			<?php echo h($currentLogInUser['CurrentLogInUser']['entry_point']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Current Log In User'), array('action' => 'edit', $currentLogInUser['CurrentLogInUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Current Log In User'), array('action' => 'delete', $currentLogInUser['CurrentLogInUser']['id']), null, __('Are you sure you want to delete # %s?', $currentLogInUser['CurrentLogInUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Current Log In Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Current Log In User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
