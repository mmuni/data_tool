<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 7: Other Academic Qualifications</h2>
	<?php
	?>
<table class='table'>
    <tr>
        <th>University/institution/<br/>college</th>
        <th>Qualification Details(if any)</th>
        <th>Date Obtained</th>
        
    </tr>
    
      <?php 
      //echo $this->Form ->create('Career');
      for($i=0; $i<3; $i++)
      {
      echo "<tr><td>";
      echo $this->form->input('Institution.institution'.$i, array('label'=>false))."</td><td>";
      echo $this->form->input('AcademicHistory.qualification_name'.$i, array('label'=>false))."</td><td>";
      echo $this->form->input('AcademicHistory.year_of_completion'.$i, array('label'=>false))."</td><td>";
      
      } 
?>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
