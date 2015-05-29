<div class="btn-group" role="group">
<?php
echo $this->Form->submit('Continue', array('div' => false, 'class' => 'btn btn-primary'));
echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'class' => 'btn', 'div' => false));
?>
