<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>

	<h2>Step 2: Address </h2>
	<?php
        echo $this->Form->input('Address.village');
		echo $this->Form->input('Address.sub_county');
		echo $this->Form->input('Address.district');
		echo $this->Form->input('Address.city');
		echo $this->Form->input('Address.country', array('options' => $countries, 'empty' => 'Select Country'));
		echo $this->Form->input('Address.zipcode');
		echo $this->Form->input('Address.address_line_1');
		echo $this->Form->input('Address.address_line_2');
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>

