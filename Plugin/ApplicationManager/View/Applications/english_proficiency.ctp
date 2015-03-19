
<div id="welcome" class="col-md-8">
    <div id="heading">
        English Proficiency
    </div>
    
    
<div id="content1">
<div class="radio">
<?php echo $this->Form->create(''); ?>
	<fieldset>
		
	<?php

        $options = array(' Fluent',' Adequate', '  Basic');
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
   <div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
  </td>
  <td></td>
  
  </td>
 </tr>
 </table>

</div></div>
