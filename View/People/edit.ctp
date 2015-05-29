<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('surname');
		echo $this->Form->input('othername');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('citizenship');
		echo $this->Form->input('gender');
		echo $this->Form->input('title');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('religion');
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('marital_status');
		echo $this->Form->input('deleted');
		echo $this->Form->input('Disability');
		echo $this->Form->input('Feedback');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Academic Histories'), array('controller' => 'academic_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academic History'), array('controller' => 'academic_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List English Proficiencies'), array('controller' => 'english_proficiencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New English Proficiency'), array('controller' => 'english_proficiencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Details'), array('controller' => 'staff_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disabilities'), array('controller' => 'disabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disability'), array('controller' => 'disabilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback'), array('controller' => 'feedback', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback'), array('controller' => 'feedback', 'action' => 'add')); ?> </li>
	</ul>
</div>
