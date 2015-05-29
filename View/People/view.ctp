<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Othername'); ?></dt>
		<dd>
			<?php echo h($person['Person']['othername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($person['Person']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Citizenship'); ?></dt>
		<dd>
			<?php echo h($person['Person']['citizenship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($person['Person']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religion'); ?></dt>
		<dd>
			<?php echo h($person['Person']['religion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($person['Person']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($person['Person']['marital_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($person['Person']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array(), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Academic Histories'); ?></h3>
	<?php if (!empty($person['AcademicHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Index Number'); ?></th>
		<th><?php echo __('Year Of Completion'); ?></th>
		<th><?php echo __('Qualification Name'); ?></th>
		<th><?php echo __('Certified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['AcademicHistory'] as $academicHistory): ?>
		<tr>
			<td><?php echo $academicHistory['id']; ?></td>
			<td><?php echo $academicHistory['index_number']; ?></td>
			<td><?php echo $academicHistory['year_of_completion']; ?></td>
			<td><?php echo $academicHistory['qualification_name']; ?></td>
			<td><?php echo $academicHistory['certified_by']; ?></td>
			<td><?php echo $academicHistory['modified']; ?></td>
			<td><?php echo $academicHistory['created']; ?></td>
			<td><?php echo $academicHistory['deleted']; ?></td>
			<td><?php echo $academicHistory['person_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'academic_histories', 'action' => 'view', $academicHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'academic_histories', 'action' => 'edit', $academicHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'academic_histories', 'action' => 'delete', $academicHistory['id']), array(), __('Are you sure you want to delete # %s?', $academicHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Academic History'), array('controller' => 'academic_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applications'); ?></h3>
	<?php if (!empty($person['Application'])): ?>
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
	<?php foreach ($person['Application'] as $application): ?>
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
<div class="related">
	<h3><?php echo __('Related Careers'); ?></h3>
	<?php if (!empty($person['Career'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date Started'); ?></th>
		<th><?php echo __('Date Ended'); ?></th>
		<th><?php echo __('Company Name'); ?></th>
		<th><?php echo __('Position Held'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Career'] as $career): ?>
		<tr>
			<td><?php echo $career['id']; ?></td>
			<td><?php echo $career['date_started']; ?></td>
			<td><?php echo $career['date_ended']; ?></td>
			<td><?php echo $career['company_name']; ?></td>
			<td><?php echo $career['position_held']; ?></td>
			<td><?php echo $career['person_id']; ?></td>
			<td><?php echo $career['created']; ?></td>
			<td><?php echo $career['modified']; ?></td>
			<td><?php echo $career['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'careers', 'action' => 'view', $career['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'careers', 'action' => 'edit', $career['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'careers', 'action' => 'delete', $career['id']), array(), __('Are you sure you want to delete # %s?', $career['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($person['Document'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Applications Id'); ?></th>
		<th><?php echo __('Mime Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id']; ?></td>
			<td><?php echo $document['person_id']; ?></td>
			<td><?php echo $document['path']; ?></td>
			<td><?php echo $document['name']; ?></td>
			<td><?php echo $document['type']; ?></td>
			<td><?php echo $document['size']; ?></td>
			<td><?php echo $document['applications_id']; ?></td>
			<td><?php echo $document['mime_type']; ?></td>
			<td><?php echo $document['created']; ?></td>
			<td><?php echo $document['modified']; ?></td>
			<td><?php echo $document['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array(), __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related English Proficiencies'); ?></h3>
	<?php if (!empty($person['EnglishProficiency'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Reading Level'); ?></th>
		<th><?php echo __('Speaking Level'); ?></th>
		<th><?php echo __('Writing Level'); ?></th>
		<th><?php echo __('Certification'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['EnglishProficiency'] as $englishProficiency): ?>
		<tr>
			<td><?php echo $englishProficiency['id']; ?></td>
			<td><?php echo $englishProficiency['person_id']; ?></td>
			<td><?php echo $englishProficiency['reading_level']; ?></td>
			<td><?php echo $englishProficiency['speaking_level']; ?></td>
			<td><?php echo $englishProficiency['writing_level']; ?></td>
			<td><?php echo $englishProficiency['certification']; ?></td>
			<td><?php echo $englishProficiency['created']; ?></td>
			<td><?php echo $englishProficiency['modified']; ?></td>
			<td><?php echo $englishProficiency['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'english_proficiencies', 'action' => 'view', $englishProficiency['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'english_proficiencies', 'action' => 'edit', $englishProficiency['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'english_proficiencies', 'action' => 'delete', $englishProficiency['id']), array(), __('Are you sure you want to delete # %s?', $englishProficiency['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New English Proficiency'), array('controller' => 'english_proficiencies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Staff Details'); ?></h3>
	<?php if (!empty($person['StaffDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Staff Number'); ?></th>
		<th><?php echo __('NSSF Number'); ?></th>
		<th><?php echo __('Contract Type'); ?></th>
		<th><?php echo __('Pay Grade'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['StaffDetail'] as $staffDetail): ?>
		<tr>
			<td><?php echo $staffDetail['staff_number']; ?></td>
			<td><?php echo $staffDetail['NSSF number']; ?></td>
			<td><?php echo $staffDetail['contract type']; ?></td>
			<td><?php echo $staffDetail['pay grade']; ?></td>
			<td><?php echo $staffDetail['person_id']; ?></td>
			<td><?php echo $staffDetail['created']; ?></td>
			<td><?php echo $staffDetail['modified']; ?></td>
			<td><?php echo $staffDetail['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staff_details', 'action' => 'view', $staffDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staff_details', 'action' => 'edit', $staffDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staff_details', 'action' => 'delete', $staffDetail['id']), array(), __('Are you sure you want to delete # %s?', $staffDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff Detail'), array('controller' => 'staff_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Disabilities'); ?></h3>
	<?php if (!empty($person['Disability'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Disability'] as $disability): ?>
		<tr>
			<td><?php echo $disability['id']; ?></td>
			<td><?php echo $disability['name']; ?></td>
			<td><?php echo $disability['modified']; ?></td>
			<td><?php echo $disability['created']; ?></td>
			<td><?php echo $disability['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disabilities', 'action' => 'view', $disability['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disabilities', 'action' => 'edit', $disability['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disabilities', 'action' => 'delete', $disability['id']), array(), __('Are you sure you want to delete # %s?', $disability['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disability'), array('controller' => 'disabilities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Feedback'); ?></h3>
	<?php if (!empty($person['Feedback'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Feedback'] as $feedback): ?>
		<tr>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feedback', 'action' => 'view', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feedback', 'action' => 'edit', $feedback['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feedback', 'action' => 'delete', $feedback['id']), array(), __('Are you sure you want to delete # %s?', $feedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feedback'), array('controller' => 'feedback', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
