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
    
<div >
    <?php echo $this->Form->create(''); ?>
    <fieldset>
	  <div class="alert alert-info">
   Please give the details of your two referees. At least one should be from an academic member
        of staff at the institution where you gained your most advanced qualification
 </div>
       
        <?php
    echo $this->Form->input('Name of First Referee');
    echo $this->Form->input('Position of First Referee ');
    echo $this->Form->input('Organisation of first Referee');
    echo $this->Form->input('Telephone of First Referee');
    echo $this->Form->input('Email of First Referee ');
    echo $this->Form->input('Name of Second Referee');
    echo $this->Form->input('Position of Second Referee ');
    echo $this->Form->input('Organisation of Second Referee');
    echo $this->Form->input('Telephone of Second Referee');
    echo $this->Form->input('Email of Second Referee ');
	?>
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
	  echo $this->Form->end();
   ?>
  </td>
 </tr>
 </table>    
	 </fieldset>
</div>