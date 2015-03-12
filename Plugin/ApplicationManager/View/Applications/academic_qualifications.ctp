<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 7: Other Academic Qualifications</h2>
	<?php
	?>
<table>
    <tr>
        <th>University/institution/<br/>college(Include Address & Country)</th>
        <th>Qualification Details(if any)</th>
        <th>Date Obtained</th>
        <th>Full Time/Part time/distance</th>
        <th>Upload</th>
    </tr>
    
      <?php 
      //echo $this->Form ->create('Career');
      for($i=0; $i<3; $i++)
      {
      echo "<tr><td>";
      echo $this->form->input('institution',array('label'=>false))."</td><td>";
      echo $this->form->input('Qualification',array('label'=>false))."</td><td>";
      echo $this->form->input('DateObtained',array('label'=>false))."</td><td>";
      echo $this->form->input('FullTime',array('label'=>false))."</td><td>";
      echo $this->Form->Button('Upload')."</td>";
      } 
?>
</table>
<?php echo "<h3>Professional Qualification</h3>";?>

<table>
<tr>
        <th>Date obtained</th>
        <th>Qualification<br/>(if any)</th>
        <th>Upload</th>
    </tr>


<?php

for($i=0; $i<3; $i++)
      {

echo "<tr><td>";
echo $this->form->input('Date obtained',array('label'=>false))."</td><td>";
echo $this->form->input('Qualification',array('label'=>false))."</td><td>";
echo $this->Form->Button('Upload')."</td>";
}
      ?>

</table>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
