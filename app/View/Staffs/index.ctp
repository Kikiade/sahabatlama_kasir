<h1>Staff</h1>
<?php
    echo $this->Html->link(
        'Add Staff',
        array('controller' => 'staffs', 'action','add')
    );
?>
<table>
    <tr>
        <th>Nama</th>
        <th>Address</th>
        <th>Mobile Phone</th>
        <th>Status</th>
    </tr>
    <?php foreach($staffs as $staff): ?>
    <tr>
        <td><?php echo $staff['Staff']['id']; ?></td>
        <td><?php echo $staff['Staff']['name']; ?></td>
        <td><?php echo $staff['Staff']['address']; ?></td>
        <td><?php echo $staff['Staff']['mobile_phone']; ?></td>
        <td><?php echo $staff['Staff']['status']; ?></td>
        <td><?php echo $staff['Staff']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset $staff; ?>
</table>