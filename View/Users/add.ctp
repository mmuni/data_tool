<div class="users form">
<?php
	echo $this->Form->create('User');
	echo $this->Form->inputs(
		array(
			'username',
			'password',
			'role' => array(
				'options' => array(
					'admin'     => 'Admin',
					'dean'      => 'Dean',
					'clerk'     => 'Clerk',
					'manager'   => 'Manager',
					'registrar' => 'Registrar',
					'staff'     => 'Staff'
				)
			)
		)
	);

	echo $this->Form->submit('Create');
?>

</div>
