<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>

	<h2>Step 5: UACE (GWE)</h2>
	<?php
    echo $this->Form->input('Examining Authority');
	?>

	<h2>Step 5: UACE</h2>
	   <div class="alert alert-info">
            
<h3>Secondary School Leaving Examination</h3>
<h5>Uganda Advanced Certificate of Examination (UACE) OR Equivalent</h5>

</div>
	<?php
    echo $this->Form->input('Examining Authority:');
	echo $this->Form->input('Name and Address of the School:');
	echo $this->Form->input('Year of Examination:');
	echo $this->Form->input('Index No:');
	?>
	
	<div style="color:green;font-weight:bold;font-size:12pt">Subject Results (Provide Grade such as A,B ,C) </div>
	
	<table border="0">
 
  <thead>
 <tr>
             <th>Subjects</th>
             
             <th align="right">Grade</th>
         </tr>
 
 </thead>
	
	 <?php 
	 sort($subjects);
      for($i=0; $i<=4; $i++)
      
      {
      
      echo "<tr> <td>".$this->Form->input('', array('options' => $subjects,'default'=>null))."</td><td>";
      echo $this->form->input('', array('options' => $Agrades,'default'=>null))."</td></tr>";
      
      }  
      
      
      ?>
	 <tr>
 
 <td>
	

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
