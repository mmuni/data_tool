<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->inputs ( array('User.username','User.password'));	   
		echo $this->Form->input('User.person_id', array(
            'options' => $people));
		
		//'User.person_id','User.role_id'));
		//echo $this->Form->input('personal_json');
		//echo $this->Form->input('address_json');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'login')); ?></li>
	</ul>
</div>
