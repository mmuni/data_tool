<div class="users form">
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	     <?php
			echo $this->Form->create('User');
			echo $this->Form->inputs(array('username', 'password', 'role_id', 'person_id'));
			echo $this->Form->submit('Create');
		?>
    
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'login')); ?></li>
	</ul>
</div>
