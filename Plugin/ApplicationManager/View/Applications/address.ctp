<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 2: Address</h2>
	<?php
        echo $this->Form->input('Postal Address');
        echo $this->Form->input('Person.country', array(
            'options' => $countries,
            'selected' => 'Uganda'
        ));
		echo $this->Form->input('Person.district');
		echo $this->Form->input('Person.county');
		echo $this->Form->input('Person.sub_county');
		echo $this->Form->input('Person.parish');
		echo $this->Form->input('Person.sub_parish');
		echo $this->Form->input('Person.village');

		echo $this->Form->input('Person.address_line_1');
		echo $this->Form->input('Person.address_line_2');
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>

