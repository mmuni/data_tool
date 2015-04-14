<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('campus');
		echo $this->Form->input('school_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Department People'), array('controller' => 'department_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department Person'), array('controller' => 'department_people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Histories'), array('controller' => 'staff_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff History'), array('controller' => 'staff_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
