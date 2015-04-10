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
      for($i=0; $i<3; $i++)
      {
	      echo "<tr>";
	      echo "<td>" . $this->form->input('Institution.'.$i.'.institution', array('label'=>false)) . "</td>";
	      echo "<td>" . $this->form->input('AcademicHistory.'.$i.'.qualification_name', array('label'=>false)) . "</td>";
	      echo "<td>" . $this->form->input('AcademicHistory.'.$i.'.year_of_completion', array('label'=>false)) . "</td>";
	      echo "</tr>";
      } 
?>
</table>



	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
