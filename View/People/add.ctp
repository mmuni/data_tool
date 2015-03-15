<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->inputs ( array('Person.surname','Person.othername','Person.date_of_birth','Person.citizenship','Person.gender', 'Person.title', 'Person.phone_number', 'Person.religion', 'Person.place_of_birth', 'Person.marital_status'));
		//echo $this->Form->input('personal_json');
		//echo $this->Form->input('address_json');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>
