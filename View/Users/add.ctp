<?php echo $this->Form->end(__('Submit')); ?>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>

	     <?php
			echo $this->Form->create('User');
			echo $this->Form->inputs(array('username', 'password'));
			echo $this->Form->input('role', array(
            'options' => array( 'admin' => 'Admin', 'dean' => 'Dean', 'clerk' => 'Clerk','manager'=>'Manager','registrar'=>'Registrar','staff'=>'Staff')));
			echo $this->Form->submit('Create');
		?>


	
	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>



		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>

		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'login')); ?></li>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>

	</ul>
</div>

