<div class="departments view">
<h2><?php echo __('Department'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($department['Department']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus'); ?></dt>
		<dd>
			<?php echo h($department['Department']['campus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($department['School']['name'], array('controller' => 'schools', 'action' => 'view', $department['School']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($department['Department']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($department['Department']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($department['Department']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), array(), __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Department People'), array('controller' => 'department_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department Person'), array('controller' => 'department_people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Histories'), array('controller' => 'staff_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff History'), array('controller' => 'staff_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($department['Course'])): ?>
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
	<?php foreach ($department['Course'] as $course): ?>
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
<div class="related">
	<h3><?php echo __('Related Department People'); ?></h3>
	<?php if (!empty($department['DepartmentPerson'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persons Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($department['DepartmentPerson'] as $departmentPerson): ?>
		<tr>
			<td><?php echo $departmentPerson['id']; ?></td>
			<td><?php echo $departmentPerson['persons_id']; ?></td>
			<td><?php echo $departmentPerson['department_id']; ?></td>
			<td><?php echo $departmentPerson['created']; ?></td>
			<td><?php echo $departmentPerson['modified']; ?></td>
			<td><?php echo $departmentPerson['title']; ?></td>
			<td><?php echo $departmentPerson['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'department_people', 'action' => 'view', $departmentPerson['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'department_people', 'action' => 'edit', $departmentPerson['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'department_people', 'action' => 'delete', $departmentPerson['id']), array(), __('Are you sure you want to delete # %s?', $departmentPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Department Person'), array('controller' => 'department_people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Staff Histories'); ?></h3>
	<?php if (!empty($department['StaffHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('History Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($department['StaffHistory'] as $staffHistory): ?>
		<tr>
			<td><?php echo $staffHistory['id']; ?></td>
			<td><?php echo $staffHistory['staff_id']; ?></td>
			<td><?php echo $staffHistory['history_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staff_histories', 'action' => 'view', $staffHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staff_histories', 'action' => 'edit', $staffHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staff_histories', 'action' => 'delete', $staffHistory['id']), array(), __('Are you sure you want to delete # %s?', $staffHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff History'), array('controller' => 'staff_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
