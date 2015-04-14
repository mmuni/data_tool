<div class="dashboards view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Dashboard'), array('action' => 'edit', $dashboard['Dashboard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dashboard'), array('action' => 'delete', $dashboard['Dashboard']['id']), null, __('Are you sure you want to delete # %s?', $dashboard['Dashboard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dashboards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dashboard'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Dashboard');?></h2>
		<dl>
					</dl>
	</div>
</div>
