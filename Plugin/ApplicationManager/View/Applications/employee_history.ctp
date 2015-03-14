<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 6: EMPLOYEE HISTORY</h2>
	 
 
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
