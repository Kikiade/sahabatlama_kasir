<h1>Edit Vehicle Category Cost</h1>
<?php
    echo $this->Form->Create('VehicleCategoryCost');
    echo $this->Form->input('name');
    echo $this->Form->input('cost');
    echo $this->Form->input('status');
    echo $this->Form->input('Status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
    echo $this->Form->end('Submit');
?>