<div class="universities form">
<?php echo $this->Form->create('University'); ?>
	<fieldset>
		<legend><?php echo __('Add University'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
		echo $this->Form->input('date_started');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Universities'), array('action' => 'index')); ?></li>
	</ul>
</div>
