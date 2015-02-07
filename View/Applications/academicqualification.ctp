<div id="sidenav" class="col-md-2">
    <div id="sidemenu" ><h2>Menu</h2></div>
<ul>
<li></li>
<li><?php echo $this->Html->link(__('Home'), array('action' => 'index'));?></li>
<li><?php echo $this->Html->link(__('Personal Data'), array('action' => 'personalbiodata'));?></li>
<li><?php echo $this->Html->link(__('Address'), array('action' => 'addresses'));?></li>
<li><?php echo $this->Html->link(__('Courses'), array('action' => 'courses'));?></li>
<li><?php echo $this->Html->link(__('UACE'), array('action' => 'uace'));?></li>
<li><?php echo $this->Html->link(__('UCE'), array('action' => 'uce'));?></li>
<li><?php echo $this->Html->link(__('Academic Qualifications'), array('action' => 'academicqualification'));?></li>
<li><?php echo $this->Html->link(__('Employee History'), array('action' => ''));?></li>
<li><?php echo $this->Html->link(__('Career'), array('action' => 'career'));?></li>
<li><?php echo $this->Html->link(__('English proficiency'), array('action' => 'english_proficiency'));?></li>
<li><?php echo $this->Html->link(__('Disabilities'), array('action' => 'disability'));?></li>
<li><?php echo $this->Html->link(__('References'), array('action' => 'referee'));?></li>
<li><?php echo $this->Html->link(__('Feed Back'), array('action' => 'feedback'));?></li>
</ul>

</div>
<div id="welcome" class="col-md-8">
    <div id="heading">
        Other Academic Qualifications
    </div>
<div id="content1">
<?php echo $this->Form->create('Career'); ?>
	
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
<table>
 <tr>
 <td> 
   <?php
      echo $this->Form->submit('<< Back',array("name"=> "back"));
 	?>
  </td>
  <td></td>
  <td align="right">
   <?php
     echo $this->Form->submit('Next >>',array("name"=> "next"));
   ?>
  </td>
 </tr>
 </table>
 
</div>

