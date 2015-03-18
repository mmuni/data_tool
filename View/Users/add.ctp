
<?php

	echo $this->Form->create('User');
	echo $this->Form->inputs(array('username', 'password', 'role_id', 'person_id'));
	echo $this->Form->submit('Create');
?>