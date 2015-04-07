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
  echo $this->Form->input('Institution.1.name',array('label'=>'Examining Authority:'));
  echo $this->Form->input('Institution.2.name',array('label'=>'Name of the School:'));
  echo $this->Form->input('ContactDetail.post_office_box',array('label'=>'Address of the School:'));
  echo $this->Form->input('AcademicHistory.year_of_completion',             array(
                'type' => 'date',
                'empty' => false,
                'inline' => false,
                'maxYear' => date('Y') - 2,
                'minYear' => date('Y') - 90,
                'dateFormat' => 'DMY',
                'class' => '',
				'label'=>"Date of Completion:"
            ));
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
			echo $this->Form->input('AcademicHistoriesSubject.'.$i.'.subject_id', array('options' => $subjects,'label'=>false,'empty'=>'select subject'))."</td><td>";
			echo $this->Form->input('AcademicHistoriesSubject.'.$i.'.grade_id', array('options' => $Ogrades,'label'=>false,'empty'=>'select grade'))."</td><td>";
			
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
