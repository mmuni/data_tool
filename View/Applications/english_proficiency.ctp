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
        English Proficiency
    </div>
    
    
<div id="content1">
<div class="radio">
<?php echo $this->Form->create(''); ?>
	<fieldset>
		
	<?php

        $options = array(' Fluent',' Adquate', '  Basic');
        $option = array('yes','no');
        $attributes = array('legend' => false);
        echo $this->Form->radio('speaking_level', $options);
        echo $this->Form->radio('reading_level', $options);
        echo $this->Form->radio('writing_level', $options);
        echo 'Do you have any english qualification ? '.$this->Form->radio('certification', $option, $attributes);
	
        ?>
                
	</fieldset>
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

</div></div>
