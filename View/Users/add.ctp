<<<<<<< HEAD
<div class="people form">

<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array('username', 'password'));
echo $this->Form->input('role', array('options'=> array( 'admin'=>'Admin','dean'=>'Dean','clerk'=>'Clerk','manager'=>'Manager','staff'=>'Staff','reg'=>'Registrar')));
echo $this->Form->submit('Create');
?>‏

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="users form">
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	     <?php
			echo $this->Form->create('User');
			echo $this->Form->inputs(array('username', 'password'));
			echo $this->Form->input('role', array(
            'options' => array( 'admin' => 'Admin', 'dean' => 'Dean', 'clerk' => 'Clerk')));
			echo $this->Form->submit('Create');
		?>

	</fieldset>


</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>


		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>

		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'login')); ?></li>

	</ul>
</div>
