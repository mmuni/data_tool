<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 2: Personal Biodata</h2>
	<?php
		echo $this->Form->input('Person.surname');
		echo $this->Form->input('Person.first_name');
		echo $this->Form->input('Person.place_of_birth');

		echo $this->Form->input(
            'Person.date_of_birth',
            array(
                'type' => 'date',
                'empty' => false,
                'inline' => false,
                'maxYear' => date('Y') - 10,
                'minYear' => date('Y') - 90,
                'dateFormat' => 'YMD',
                'class' => ''
            )
        );

		echo $this->Form->input('Person.fathers_name');
		echo $this->Form->input('Person.mothers_name');

        #echo $this->Form->label('Person.gender');
        echo $this->Form->input(
            'Person.gender',
            array(
                'empty' => false,
                'type' => 'select',
                'options' => array(
                    'M' => 'Male',
                    'F' => 'Female'
                )
            )
        );
        echo $this->Form->input(
            'Person.phone_number',
            array(
                'type' => 'tel'
            )
        );

		echo $this->Form->input(
            'Application.year_of_examination',
            array(
                'type' => 'date',
                'empty' => false,
                'dateFormat' => 'Y',
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 90,
            )
        );


        echo $this->Form->input(
            'Person.email_address',
            array(
                'type' => 'email',
            )
        );
		echo $this->Form->input('Person.religion');
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
