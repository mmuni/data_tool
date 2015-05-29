<div class="addressPeople view">
<h2><?php echo __('Address Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($addressPerson['AddressPerson']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressPerson['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $addressPerson['Address']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressPerson['Person']['title'], array('controller' => 'people', 'action' => 'view', $addressPerson['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($addressPerson['AddressPerson']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($addressPerson['AddressPerson']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($addressPerson['AddressPerson']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($addressPerson['AddressPerson']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address Person'), array('action' => 'edit', $addressPerson['AddressPerson']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address Person'), array('action' => 'delete', $addressPerson['AddressPerson']['id']), array(), __('Are you sure you want to delete # %s?', $addressPerson['AddressPerson']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Address People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
