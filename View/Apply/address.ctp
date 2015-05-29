<h2>Address</h2>
<?php
echo $this->Form->create('Application', array('id' => 'ApplyForm', 'url' => $this->here,));

echo $this->Form->input('Address.village');
echo $this->Form->input('Address.sub_county');
echo $this->Form->input('Address.district');
echo $this->Form->input('Address.city');
echo $this->Form->input('Address.country', array('options' => $countries, 'empty' => 'Select Country'));
echo $this->Form->input('Address.zipcode');
echo $this->Form->input('Address.address_line_1');
echo $this->Form->input('Address.address_line_2');

echo $this->element('wizard_buttons');

echo $this->Form->end();

