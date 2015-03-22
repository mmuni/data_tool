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
     <?php 
	 echo $this->Form ->create('EmployeeHistory');
      for($i=0; $i<3; $i++)
      {
      echo "<tr><td>";
			echo $this->Form->input('Career.company_name'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.post_office_box'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.telephone'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('ContactDetail.email'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.position_held'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.date_started'.$i, array('label'=>false))."</td><td>";
			echo $this->Form->input('Career.date_ended'.$i, array('label'=>false))."</td><td>";
			}
	?>
     
	</table>


	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
