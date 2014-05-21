<h1>Add Category</h1>

<fieldset>
<?php
	echo $this->Form->create('VehicleCategory');
	echo $this->Form->input('name');
	echo $this->Form->input('price');
	echo $this->Form->input('nyuci_share');
	$status = array('1' => 'Active', '0' => 'NotActive');
	echo $this->Form->input('status', array('options' => $status));
	echo $this->Form->end('Save');
?>
</fieldset>