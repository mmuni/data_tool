<?php echo $this->Form->create('Application', array('id' => 'ApplicationForm', 'url' => $this->here)); ?>
	<h2>Step 1: Login (GWE)</h2>
	<?php
		echo $this->Form->input('Person.phone_number');
		echo $this->Form->input('Application.code');
		echo $this->Form->input('Application.reciept_number');
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
