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

</div>
<div id="welcome" class="col-md-8">
    <div id="heading">
        
       PREVIOUS EDUCATION
  
    </div>
<div>
<?php echo $this->Form->create('uce'); ?>
	<fieldset>

   <div class="alert alert-info">
       Secondary School Leaving Examination<br/>
Please submit in your Uganda Certificate of Examination (UCE) OR Equivalent</h5>
 </div>
<?php
  echo $this->Form->create('AcademicHistory');			
  echo $this->Form->input('Examining Authority:',array('size' => 1));
  echo $this->Form->input('Name and Address of the School:',array('maxlength'=>'50'));
  echo $this->Form->input('Year of Examination:',array('maxlength'=>'50'));
  echo $this->Form->input('Index No:',array('maxlength'=>'50'));

?>
</fieldset>
<fieldset>
<legend><?php echo __('Subject Results (Provide Grade such as D1,D2,C3)'); ?></legend>
 <table border="0">
 
  <thead>
 <tr>
             <th>Subjects</th>
             
             <th align="right">Grade</th>
         </tr>
 
 </thead>
 
 <?php 
      for($i=1; $i<=10; $i++)
      
      {
      
      echo "<tr> <td>".$this->Form->input('', array('options' => $subjects,'default'=>null,sort($subjects)))."</td><td>";
      echo $this->Form->input('', array('options' => $grades,'default'=>null))."</td></tr>";
      
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
    
 ?>
  
 </td>

 </tr>
 
 </table>
</fieldset>
 </div>
