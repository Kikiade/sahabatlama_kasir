<h1>Add Category</h1>

<fieldset>
<?php
	echo $this->Form->create('VehicleCategory');
	echo $this->Form->input('name');
	echo $this->Form->input('price');
	echo $this->Form->input('nyuci_share');
	echo $this->Form->input('status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
	echo $this->Form->end('Save');
?>
</fieldset>