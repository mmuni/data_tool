<div class="dashboards row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dashboard.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dashboard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dashboards'), array('action' => 'index'));?></li>
	</ul>
</div>
<div class="dashboards span10">
<?php echo $this->Form->create('Dashboard', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('Edit Dashboard'); ?></legend>
	<?php
	?>
		<div class="form-actions">
<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary','div'=>false));?>
<?php echo $this->Html->link(__('Cancel'),array('controller' => '', 'action' => 'index'),array('class'=>'btn btn-cancel'));?>
		</div>
		</fieldset>
<?php echo $this->Form->end();?>
</div>
</div>