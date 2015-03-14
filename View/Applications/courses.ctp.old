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
      Course  
    </div>
<div >
<?php echo $this->Form->create(''); ?>
	<fieldset>
              <div class="alert alert-info">
       SELECT THE COURSE
 </div>
	
<?php
echo $this->Form->create('Course');
echo $this->Form->input('Course Type', array('options' => $course_types,'class' => 'span5',
            'error' => array('course_types' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline')) ));
 

echo $this->Form->input('Course Name',array('options' => $courses,'class' => 'span5',
            'error' => array('courses' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline')) ));
 

echo $this->Form->input('Course Programme',array('options' => $course_programmes,'class' => 'span5',
            'error' => array('course_programmes' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline')) ));
 

 //echo $this->Form->submit('back',array("name"=> "back"));
 // echo $this->Form->submit('next',array("name"=> "next"));
   //print $this->Form->end('Save Course');
  //echo $this->Form->end();
?>
                </fieldset>
   
<table border="0">
 
  <thead>
 <tr>
          <th >Choice</th>   
     <th>Course Type</th>
             
             <th >Course Name</th>
             <th>Course Programme </th>
             
             
         </tr>
 
 </thead>
 
  <?php 
      for($i=0; $i<4; $i++){
      echo "<tr> <td>".$this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('employe_name',array('label'=>false))."</td><td>";
      echo $this->form->input('employe_name',array('label'=>false))."</td><td>";
     
      }  
      ?>
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
    </div>
