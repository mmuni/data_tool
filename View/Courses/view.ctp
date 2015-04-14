<div class="courses view">
<h2><?php echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($course['Course']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($course['Course']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic Year'); ?></dt>
		<dd>
			<?php echo h($course['Course']['academic_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirements Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['requirements_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Type'); ?></dt>
		<dd>
			<?php echo h($course['Course']['course_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['department_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($course['Course']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($course['Course']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($course['Course']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), array(), __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Types'), array('controller' => 'course_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Types'), array('controller' => 'course_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Programmes'), array('controller' => 'course_programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Programmes'), array('controller' => 'course_programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Programmes'); ?></h3>
	<?php if (!empty($course['course_programmes'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($course['course_programmes'] as $courseProgrammes): ?>
		<tr>
			<td><?php echo $courseProgrammes['id']; ?></td>
			<td><?php echo $courseProgrammes['name']; ?></td>
			<td><?php echo $courseProgrammes['modified']; ?></td>
			<td><?php echo $courseProgrammes['created']; ?></td>
			<td><?php echo $courseProgrammes['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'course_programmes', 'action' => 'view', $courseProgrammes['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_programmes', 'action' => 'edit', $courseProgrammes['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_programmes', 'action' => 'delete', $courseProgrammes['id']), array(), __('Are you sure you want to delete # %s?', $courseProgrammes['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Programmes'), array('controller' => 'course_programmes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Modules'); ?></h3>
	<?php if (!empty($course['Module'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Credit Units'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($course['Module'] as $module): ?>
		<tr>
			<td><?php echo $module['id']; ?></td>
			<td><?php echo $module['code']; ?></td>
			<td><?php echo $module['name']; ?></td>
			<td><?php echo $module['credit_units']; ?></td>
			<td><?php echo $module['type']; ?></td>
			<td><?php echo $module['created']; ?></td>
			<td><?php echo $module['modified']; ?></td>
			<td><?php echo $module['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'modules', 'action' => 'view', $module['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'modules', 'action' => 'edit', $module['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'modules', 'action' => 'delete', $module['id']), array(), __('Are you sure you want to delete # %s?', $module['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applications'); ?></h3>
	<?php if (!empty($course['Application'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Received By'); ?></th>
		<th><?php echo __('Date Received'); ?></th>
		<th><?php echo __('Mark Complete'); ?></th>
		<th><?php echo __('Marked Complete By Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Hostel'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($course['Application'] as $application): ?>
		<tr>
			<td><?php echo $application['id']; ?></td>
			<td><?php echo $application['received_by']; ?></td>
			<td><?php echo $application['date_received']; ?></td>
			<td><?php echo $application['mark_complete']; ?></td>
			<td><?php echo $application['marked_complete_by_id']; ?></td>
			<td><?php echo $application['created']; ?></td>
			<td><?php echo $application['modified']; ?></td>
			<td><?php echo $application['deleted']; ?></td>
			<td><?php echo $application['person_id']; ?></td>
			<td><?php echo $application['hostel']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $application['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $application['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $application['id']), array(), __('Are you sure you want to delete # %s?', $application['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
