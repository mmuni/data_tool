<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	
</fieldset>
<fieldset>
<legend><?php echo __('If you are sure'); ?></legend>
 <?php
   



    echo $this->Form->input('', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'i'=>'I declare that the information given above is correct',
	)
	) );
	
	?>
 </div>
 
 
 
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
