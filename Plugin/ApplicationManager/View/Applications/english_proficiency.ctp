
<div id="welcome" class="col-md-8">
    <div id="heading">
        English Proficiency
    </div>
    
    
<div id="content1">
<div class="radio">
<?php echo $this->Form->create(''); ?>
	<fieldset>
		
	<?php

        $options = array('F'=>'Fluent','A'=>' Adequate', 'B'=>'Basic');
        $option = array('Y'=>'yes','N'=>'no');
        
        echo $this->Form->radio('EnglishProficiency.reading_level', $options);
        echo $this->Form->radio('EnglishProficiency.speaking_level', $options);
        echo $this->Form->radio('EnglishProficiency.writing_level', $options);
		$attributes = array('legend' => false);
        echo 'Do you have any english qualification ? '.$this->Form->radio('EnglishProficiency.certification', $option, $attributes);
	
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
