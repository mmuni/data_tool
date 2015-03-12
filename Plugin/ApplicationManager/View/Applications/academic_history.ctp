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
      echo $this->form->input('academic_histories.institution'.$i, array('label'=>false))."</td><td>";
      echo $this->form->input('academic_histories.qualification_name'.$i, array('label'=>Qualification))."</td><td>";
      echo $this->form->input('academic_histories.date_obtained'.$i, array('label'=>Date Obtained))."</td><td>";
      
      } 
?>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
