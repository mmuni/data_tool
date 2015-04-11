<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 6: EMPLOYEE HISTORY</h2>


  <div class="alert alert-info">
   
 </div>

 
	<table class='table' >
	<tr>
		<th>Company Name</th>
		<th>Address</th>
		<th>Phone No</th>
		<th>Email</th>
		<th>Position</th>
		<th>Start Date</th>
		<th>End date</th>
	</tr>
	
	<?php for ($i = 0; $i < 3; $i = $i+1): ?>
     <?php 
	 echo $this->Form ->create('EmployeeHistory');
     
      {
      echo "<tr><td>";
			echo $this->Form->input('Career.'.$i.'.company_name', array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.'.$i.'.post_office_box', array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.'.$i.'.telephone', array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.'.$i.'.email', array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.'.$i.'.position_held', array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.'.$i.'.date_started', array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.'.$i.'.date_ended', array('label'=>false))."</td>";
	echo "</tr>";
			}
	?>
     <?php endfor ?>
	</table>


	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
