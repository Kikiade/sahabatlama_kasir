<form id="UserAddForm" method="post" action="/users/add"></form>
<?php
    echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));
?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Username</th>
        <th>Status</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['name']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['status']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
        <td><?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id']));?></td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));?></td>
        <td><?php echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id']));?></td>
    </tr>
    <?php endforeach;?>
    <?php unset ($user); ?>
</table>
