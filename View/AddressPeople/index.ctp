<div class="addressPeople index">
	<h2><?php echo __('Address People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($addressPeople as $addressPerson): ?>
	<tr>
		<td><?php echo h($addressPerson['AddressPerson']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($addressPerson['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $addressPerson['Address']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($addressPerson['Person']['title'], array('controller' => 'people', 'action' => 'view', $addressPerson['Person']['id'])); ?>
		</td>
		<td><?php echo h($addressPerson['AddressPerson']['type']); ?>&nbsp;</td>
		<td><?php echo h($addressPerson['AddressPerson']['created']); ?>&nbsp;</td>
		<td><?php echo h($addressPerson['AddressPerson']['modified']); ?>&nbsp;</td>
		<td><?php echo h($addressPerson['AddressPerson']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $addressPerson['AddressPerson']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $addressPerson['AddressPerson']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $addressPerson['AddressPerson']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $addressPerson['AddressPerson']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Address Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
