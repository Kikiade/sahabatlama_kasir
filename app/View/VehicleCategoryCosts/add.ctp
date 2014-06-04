<h1>Add Vehicle Category Cost</h1>
<?php
    echo $this->Form->Create('VehicleCategoryCost');
    echo $this->Form->input('name');
    echo $this->Form->input('cost');
    echo $this->Form->input('Status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
    echo $this->Form->input('vehicle_category_id', array('options' => $vehicle_categories, 'empty' => '(Please Choosse)', 'value' => '(Please Choosse)'));
    echo $this->Form->end('Submit');
?>