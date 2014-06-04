<h1>Add Customers</h1>

<fieldset>
<?php
	echo $this->Form->create('Customer');
	echo $this->Form->input('name');
	echo $this->Form->input('vehicle_number');
	echo $this->Form->input('vehicle_category_id', array('options' => $vehicle_categories, 'empty' => '(Please Choosse)', 'value' => '(Please Choosse)'));
	$status = array('1' => 'Active', '0' => 'NotActive');
	echo $this->Form->input('status', array('options' => $status));
	echo $this->Form->end('Save');
?>
</fieldset>