<h1>Add Staff</h1>

<?php
    echo $this->Form->create('Staff');
    echo $this->Form->input('name');
    echo $this->Form->input('address');
    echo $this->Form->input('mobile_phone');
    echo $this->Form->input('Status', array('options' => array('0'=>'Not Active', '1'=>'Active')));
    echo $this->Form->save('Submit');
?>