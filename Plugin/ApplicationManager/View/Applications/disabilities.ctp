
<div id="welcome" class="col-md-8">
    <div id="heading">
        Disability
    </div>
  
 <div id="content1">
    <?php echo $this->Form->create(''); ?>
    <fieldset>
        <div class="alert alert-info">
       Please indicate all the disabilities/Medical issues you could be having
 </div>
        <legend><?php echo __(''); ?></legend>
        
		<?php
		
		echo $this->Form->input(
			'PeopleDisability.disability_id',
			array(
				'type' => 'select',
				'multiple' => 'checkbox',
				'label' => 'Type of disability',
				'options' => $disabilities
			)
		);
		
		echo $this->form->input('Other');
		?>
<table>
 <tr>
 <td> 
   <div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
  </td>
  <td></td>
  <td align="right">
   
  </td>
 </tr>
 </table>
</fieldset>

</div>
<div id="content1">