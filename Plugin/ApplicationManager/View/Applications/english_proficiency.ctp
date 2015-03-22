<h2>English Proficiency</h2>
<?php
	echo $this->Form->create('Application',
		array(
			'id' => 'ApplicationForm',
			'url' => $this->here,
			'formStyle' => 'horizontal'
		)
	);

	echo $this->Form->input('EnglishProficiency.reading_level',
		array(
			'type' => 'radio',
			'label' => 'Reading Level',
			'inline' => true,
			'options' => array(
				1 => 'Fluent',
				2 => 'Adequate',
				3 => 'Basic',
			)
		)
	);

	echo $this->Form->input('EnglishProficiency.speaking_level',
		array(
			'type' => 'radio',
			'label' => 'Speaking Level',
			'inline' => true,
			'options' => array(
				1 => 'Fluent',
				2 => 'Adequate',
				3 => 'Basic',
			)
		)
	);
	    
	echo $this->Form->input('EnglishProficiency.writing_level',
		array(
			'type' => 'radio',
			'label' => 'Writing Level',
			'inline' => true,
			'options' => array(
				1 => 'Fluent',
				2 => 'Adequate',
				3 => 'Basic',
			)
		)
	);

	echo $this->Form->input('EnglishProficiency.certification',
		array(
			'type' => 'select',
			'label' => 'Do you have any english qualification?',
			'options' => array(
				'Y' => 'Yes',
				'N' => 'No'
			)
		)
	);
?>

<div class="submit">
	<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
	<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
</div>

<?php echo $this->Form->end(); ?>
