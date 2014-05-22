<?php
    echo $this->Html->link(
        'Add Staff',
        array('controller' => 'staff', 'action' , 'add')
    );
?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile Phone</th>
        <th>Status</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <?php foreach($staffs as $staff): ?>
    <tr>
        <td><?php echo $staff['Staff']['id']; ?></td>
        <td><?php echo $staff['Staff']['name']; ?></td>
        <td><?php echo $staff['Staff']['address']; ?></td>
        <td><?php echo $staff['Staff']['mobile_phone']; ?></td>
        <td><?php echo $staff['Staff']['status']; ?></td>
        <td><?php echo $staff['Staff']['created']; ?></td>
        <td>
            <?php
                echo $this->Html->link('View', array('action' => 'view', $staff['Staff']['id']));
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link('Edit', array('action' => 'edit', $staff['Staff']['id']));
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postlink('Delete', array('action' => 'delete', $staff['Staff']['id']),
                                           array('confirm'=>'Are you sure'));
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link('Hide', array('action' => 'hidden', $staff['Staff']['id']));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset ($staff); ?>
</table>