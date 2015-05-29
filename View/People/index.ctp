<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('surname'); ?></th>
			<th><?php echo $this->Paginator->sort('othername'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('citizenship'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number'); ?></th>
			<th><?php echo $this->Paginator->sort('religion'); ?></th>
			<th><?php echo $this->Paginator->sort('place_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('marital_status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($people as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['surname']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['othername']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['citizenship']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['gender']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['title']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['religion']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['place_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['marital_status']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['created']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['modified']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $person['Person']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Academic Histories'), array('controller' => 'academic_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Academic History'), array('controller' => 'academic_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List English Proficiencies'), array('controller' => 'english_proficiencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New English Proficiency'), array('controller' => 'english_proficiencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Details'), array('controller' => 'staff_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disabilities'), array('controller' => 'disabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disability'), array('controller' => 'disabilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback'), array('controller' => 'feedback', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback'), array('controller' => 'feedback', 'action' => 'add')); ?> </li>
	</ul>
</div>
