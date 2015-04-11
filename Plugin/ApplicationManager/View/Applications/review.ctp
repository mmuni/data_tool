<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
));
	
echo $this->Form->input('', array(
	'type' => 'select',
	'multiple' => 'checkbox',
	'options' => array(
		'i'=>'I declare that the information given in this application is correct',
	)
));
	
pr($index);
pr($biodata);
pr($address);
pr($courses);
pr($uace);
pr($uce);
pr($academic_history);
pr($employee_history);
pr($english_proficiency);
pr($disabilities);
pr($referee);
pr($feedback);

?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
