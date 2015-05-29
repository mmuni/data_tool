<h2>Personal Biodata</h2>

<?php
echo $this->Form->create('Apply', array('id' => 'ApplyForm', 'url' => $this->here));
echo $this->Form->input(
    'Person.title',
    array(
        'empty' => false,
        'type' => 'select',
        'options' => array(
            'Mr' => 'Mr',
            'Mrs' => 'Mrs',
            'Ms' => 'Ms',
            'Dr' => 'Dr',
        )
    )
);
echo $this->Form->input('Person.surname');
echo $this->Form->input('Person.othername');
echo $this->Form->input('Person.place_of_birth');
echo $this->Form->input(
    'Person.citizenship',
    array(
        'type' => 'select',
        'options' => $countries,
    )
);
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
    'Person.marital_status',
    array(
        'empty' => false,
        'type' => 'select',
        'options' => array(
            'single' => 'Single',
            'married' => 'Married',
        )
    )
);

echo $this->Form->input('Person.phone_number', array('type' => 'tel'));

echo $this->Form->input('Person.email_address', array('type' => 'email'));
echo $this->Form->input('Person.religion', array(
    'options' => $religions,
    'default' => 'christianity',
));

echo $this->element('wizard_buttons');
echo $this->Form->end();
