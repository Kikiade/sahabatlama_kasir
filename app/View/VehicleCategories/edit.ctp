<h1>Edit</h1>

<?php
	echo $this->Form->create('VehicleCategory');
	echo $this->Form->input('name');
	echo $this->Form->input('price');
	echo $this->Form->input('nyuci_share');
	echo $this->Form->input('Status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
	echo $this->Form->end('Save');
?>