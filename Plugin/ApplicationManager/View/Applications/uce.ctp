<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 6: UCE</h2>
	
    
 
 
 <div id="welcome" class="col-md-8">
    <div id="heading">
        
       PREVIOUS EDUCATION
  
    </div>
<div>
<?php echo $this->Form->create('uce'); ?>
	<fieldset>

   <div class="alert alert-info">
Secondary School Leaving Examination<br/>
Please submit in your Uganda Certificate of Examination (UCE) OR Equivalent</h5>
 </div>
<?php
  echo $this->Form->create('AcademicHistory');			
  echo $this->Form->input('Examining Authority:',array('size' => 1));
  echo $this->Form->input('Name of the School:',array('maxlength'=>'50'));
  echo $this->Form->input('Address of the School:',array('maxlength'=>'50'));
  echo $this->Form->input('Year of Examination:',array('maxlength'=>'50'));
  echo $this->Form->input('Index No:',array('maxlength'=>'50'));

?>
</fieldset>
<fieldset>
<legend><?php echo __('Subject Results (Provide Grade such as D1,D2,C3)'); ?></legend>
 <table border="0">
 
  <thead>
 <tr>
             <th>Subjects</th>
             
             <th align="right">Grade</th>
         </tr>
 
 </thead>
 
 <?php 
      for($i=1; $i<=10; $i++)
      
      {
		 sort($subjects); 
		  
		 // echo $this->Form->input('Course Type', array('options' => $course_types));
      echo "<tr> <td>".$this->Form->input('', array('options' => $subjects,'default'=> null)).   "</td><td>";
      echo $this->Form->input('', array('options' => $Ogrades,'default'=>null))."</td></tr>";
      
      }  
      ?>
  </table>
</fieldset>
 </div>
 
 
 
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
