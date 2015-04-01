<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	
</fieldset>
<fieldset>
<legend><?php echo __('If you are sure'); ?></legend>
 <?php

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

    echo $this->Form->input('', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'i'=>'I declare that the information given above is correct',
	)
	) );
	
	?>
 </div>
 
 
 
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
