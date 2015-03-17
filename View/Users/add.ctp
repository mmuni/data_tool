<div class="people form">

<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array('username', 'password', 'role_id', 'staff_number'));
echo $this->Form->submit('Create');
?>‏










	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>
