<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>

<h3>References</h3>
    
<div class="alert alert-info"> Please give the names of your two referees.  </div>

<?php for ($i = 0; $i < 2; $i = $i+1): ?>
	<fieldset>
		<legend>Referee No: <?= ($i+1) ?></legend>
		<?php
			echo $this->Form->input('Referee.' . $i . '.name', array('type' => 'text'));
			echo $this->Form->input('Referee.' . $i . '.position', array('type' => 'text'));
			echo $this->Form->input('Referee.' . $i . '.organisation');
			echo $this->Form->input('Referee.' . $i . '.telephone');
			echo $this->Form->input('Referee.' . $i . '.email');
		?>
	</fieldset>
<?php endfor ?>

<div class="submit">
<?php
	echo $this->Form->submit('Continue', array('div' => false));
	echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false));
?>
</div>

<?php echo $this->Form->end(); ?>
