<div class="universities view">
<h2><?php echo __('University'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($university['University']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($university['University']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($university['University']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Started'); ?></dt>
		<dd>
			<?php echo h($university['University']['date_started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($university['University']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($university['University']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($university['University']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit University'), array('action' => 'edit', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete University'), array('action' => 'delete', $university['University']['id']), array(), __('Are you sure you want to delete # %s?', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('action' => 'add')); ?> </li>
	</ul>
</div>
