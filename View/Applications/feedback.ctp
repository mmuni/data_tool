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
       Feedback 
    </div>
    
<div id="content1">
    <?php echo $this->Form->create(''); ?>
<fieldset>
<div class="alert alert-info">
 Please indicate how you got to know about this university</p>
Select what applies
 </div>


<?php
    echo $this->Form->input('feedback', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'Radio'=>'Radio',
	'n'=>'Newspaper',
	'o'=>'Open day',
	'b'=>'Brochures',
	'T'=>'Television',
	'P'=>'Personal Recommendation',
	'uw'=>'University Website',
	'ua'=>'University Agent',
	'us'=>'University Staff',
    )
    ) );
echo $this->form->input('Other');


    echo $this->Form->input('', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'i'=>'I declare that the information given above is correct',
	)
	) );
	
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
     echo $this->Form->submit('submit',array('name'=>'Submit'));
	  echo $this->Form->end();
   ?>
  </td>
 </tr>
 </table>
</fieldset>
    </div>