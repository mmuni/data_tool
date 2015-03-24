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
  echo $this->Form->input('Institution.name1',array('label'=>'Examining Authority:'));
  echo $this->Form->input('Institution.name2',array('label'=>'Name of the School:'));
  echo $this->Form->input('ContactDetail.post_office_box',array('label'=>'Address of the School:'));
  echo $this->Form->input('AcademicHistory.year_of_completion',array('label'=>'Date of Completion:'));
  echo $this->Form->input('AcademicHistory.index_number',array('label'=>'Index No:'));

?>
</fieldset>
<fieldset>
<legend><?php echo __('Subject Results (Provide Grade such as D1,D2,C3)'); ?></legend>
 <table class='table'>
 
  <thead>
 <tr>
             <th>Subjects</th>
             
             <th align="right">Grade</th>
         </tr>
 
 </thead>

 <?php for ($i = 0; $i<= 9; $i = $i+1): ?>
	
     <?php 
     
      {
      echo "<tr><td>";
			echo $this->Form->input('AcademicHistoriesSubject.subject_id'.$i, array('options' => $subjects,'default'=>null,'label'=>false))."</td><td>";
			echo $this->Form->input('AcademicHistoriesSubject.grade_id'.$i, array('options' => $Ogrades,'default'=>null,'label'=>false))."</td><td>";
			
			}
	?>
     <?php endfor ?>

  </table>
</fieldset>
 </div>
 
 
 
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
