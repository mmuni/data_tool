<div class="courses form">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('description');
		echo $this->Form->input('academic_year');
		echo $this->Form->input('requirements_id');
		echo $this->Form->input('course_type');
		echo $this->Form->input('department_id');
		echo $this->Form->input('deleted');
		echo $this->Form->input('course_programmes');
		echo $this->Form->input('Module');
		echo $this->Form->input('Application');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Course.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Course.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Course Types'), array('controller' => 'course_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Types'), array('controller' => 'course_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Programmes'), array('controller' => 'course_programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Programmes'), array('controller' => 'course_programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
