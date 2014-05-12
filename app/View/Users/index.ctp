<form id="UserAddForm" method="post" action="/users/add"></form>
<?php
    echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));
?>
