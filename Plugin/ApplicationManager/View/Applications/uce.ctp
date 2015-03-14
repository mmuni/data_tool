<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 6: UCE</h2>
	
    
   
	<fieldset>

   <div class="alert alert-info">
       Secondary School Leaving Examination<br/>
Please submit in your Uganda Certificate of Examination (UCE) OR Equivalent</h5>
 </div>
<?php
  echo $this->Form->create('AcademicHistory');			
  echo $this->Form->input('Examining Authority:',array('size' => 1));
  echo $this->Form->input('Name and Address of the School:',array('maxlength'=>'50'));
  echo $this->Form->input('Year of Examination:',array('maxlength'=>'50'));
  echo $this->Form->input('Index No:',array('maxlength'=>'50'));

?>
</fieldset>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
