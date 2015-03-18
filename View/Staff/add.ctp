<?php

echo $this->Form->create('StaffDetail');
echo $this->Form->inputs(array(
    'staff_number',
));
echo $this->Form->submit('Create');
echo $this->Form->end();
