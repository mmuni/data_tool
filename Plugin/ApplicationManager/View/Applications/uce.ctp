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
	<fieldset>
   <div class="alert alert-info">
        Secondary School Leaving Examination<br/>
        Please submit in your Uganda Certificate of Examination (UCE) OR Equivalent</h5>
 </div>
<?php		
  echo $this->Form->input('Institution.name',array('label'=>'Examining Authority:'));
  echo $this->Form->input('Institution.name',array('label'=>'Name of the School:'));
  echo $this->Form->input('Institution.Address',array('label'=>'Address of the School:'));
  echo $this->Form->date('AcademicHistory.year_of_completion',array('Date of Completion:'));
  echo $this->Form->input('AcademicHistory.index_number',array('label'=>'Index No:'));

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
