<div class="applicationTemps form">
<?php echo $this->Form->create('ApplicationTemp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Application Temp'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('personal_json');
		echo $this->Form->input('address_json');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ApplicationTemp.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ApplicationTemp.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Application Temps'), array('action' => 'index')); ?></li>
	</ul>
</div>
