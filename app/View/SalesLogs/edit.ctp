<h1>Edit Sales Log</h1>
<?php
    echo $this->Form->Create('SalesLog');
    echo $this->Form->input('staff_id');
    echo $this->Form->input('vehicle_id');
    echo $this->Form->input('Status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
    echo $this->Form->end('Submit');
?>