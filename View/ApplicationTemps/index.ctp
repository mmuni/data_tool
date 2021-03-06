<div class="applicationTemps index">
	<h2><?php echo __('Application Temps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_json'); ?></th>
			<th><?php echo $this->Paginator->sort('address_json'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($applicationTemps as $applicationTemp): ?>
	<tr>
		<td><?php echo h($applicationTemp['ApplicationTemp']['id']); ?>&nbsp;</td>
		<td><?php echo h($applicationTemp['ApplicationTemp']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($applicationTemp['ApplicationTemp']['personal_json']); ?>&nbsp;</td>
		<td><?php echo h($applicationTemp['ApplicationTemp']['address_json']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicationTemp['ApplicationTemp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicationTemp['ApplicationTemp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicationTemp['ApplicationTemp']['id']), array(), __('Are you sure you want to delete # %s?', $applicationTemp['ApplicationTemp']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Application Temp'), array('action' => 'add')); ?></li>
	</ul>
</div>
