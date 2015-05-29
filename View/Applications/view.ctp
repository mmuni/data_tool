<div class="applications view">
<h2><?php echo __('Application'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Received By'); ?></dt>
		<dd>
			<?php echo h($application['Application']['received_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Received'); ?></dt>
		<dd>
			<?php echo h($application['Application']['date_received']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mark Complete'); ?></dt>
		<dd>
			<?php echo h($application['Application']['mark_complete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['User']['username'], array('controller' => 'users', 'action' => 'view', $application['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($application['Application']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($application['Application']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($application['Application']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['Person']['title'], array('controller' => 'people', 'action' => 'view', $application['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hostel'); ?></dt>
		<dd>
			<?php echo h($application['Application']['hostel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['id']), array(), __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Application Courses'), array('controller' => 'application_courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application Course'), array('controller' => 'application_courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Application Courses'); ?></h3>
	<?php if (!empty($application['ApplicationCourse'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Application Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($application['ApplicationCourse'] as $applicationCourse): ?>
		<tr>
			<td><?php echo $applicationCourse['id']; ?></td>
			<td><?php echo $applicationCourse['application_id']; ?></td>
			<td><?php echo $applicationCourse['course_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'application_courses', 'action' => 'view', $applicationCourse['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'application_courses', 'action' => 'edit', $applicationCourse['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'application_courses', 'action' => 'delete', $applicationCourse['id']), array(), __('Are you sure you want to delete # %s?', $applicationCourse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Application Course'), array('controller' => 'application_courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($application['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Academic Year'); ?></th>
		<th><?php echo __('Requirements Id'); ?></th>
		<th><?php echo __('Course Type'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($application['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td><?php echo $course['code']; ?></td>
			<td><?php echo $course['description']; ?></td>
			<td><?php echo $course['academic_year']; ?></td>
			<td><?php echo $course['requirements_id']; ?></td>
			<td><?php echo $course['course_type']; ?></td>
			<td><?php echo $course['department_id']; ?></td>
			<td><?php echo $course['created']; ?></td>
			<td><?php echo $course['modified']; ?></td>
			<td><?php echo $course['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array(), __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
