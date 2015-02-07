<div class="applicationTemps view">
<h2><?php echo __('Application Temp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($applicationTemp['ApplicationTemp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($applicationTemp['ApplicationTemp']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Json'); ?></dt>
		<dd>
			<?php echo h($applicationTemp['ApplicationTemp']['personal_json']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Json'); ?></dt>
		<dd>
			<?php echo h($applicationTemp['ApplicationTemp']['address_json']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application Temp'), array('action' => 'edit', $applicationTemp['ApplicationTemp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application Temp'), array('action' => 'delete', $applicationTemp['ApplicationTemp']['id']), array(), __('Are you sure you want to delete # %s?', $applicationTemp['ApplicationTemp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Application Temps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application Temp'), array('action' => 'add')); ?> </li>
	</ul>
</div>
