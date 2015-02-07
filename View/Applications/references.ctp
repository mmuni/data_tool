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
       References 
    </div>
    
<?php
    echo $this->Form->create('');
?>
    <div class="alert alert-info">
  Please give the names of your two referees.
 </div>
    
<?php
    echo $this->Form->label('Please enter the details of the your first referee');
    echo $this->Form->input('name');
    echo $this->Form->input('position ');
    echo $this->Form->input('place_of_work');
    echo $this->Form->input('ContactDetails.telephone');
    echo $this->Form->input('ContactDetails.email ');
   echo $this->Form->label('Please enter the details of the your second referee');
    echo $this->Form->input('name');
    echo $this->Form->input('position ');
    echo $this->Form->input('place_of_work');
    echo $this->Form->input('ContactDetails.telephone');
    echo $this->Form->input('ContactDetails.email ');

	echo $this->Form->submit('back',array("name"=> "back"));
  echo $this->Form->submit('next',array("name"=> "next"));
  echo $this->Form->end();

?>