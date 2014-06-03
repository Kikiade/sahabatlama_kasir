<?php
    echo $this->Html->link(
        'Add Staff',
        array('controller' => 'staff', 'action' , 'add')
    );
?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id','ID');?></th>
        <th><?php echo $this->Paginator->sort('name','Nama');?></th>
        <th><?php echo $this->Paginator->sort('address','Address');?></th>
        <th><?php echo $this->Paginator->sort('mobile_phone','Mobile Phone');?></th>
        <th><?php echo $this->Paginator->sort('status','Status');?></th>
        <th><?php echo $this->Paginator->sort('created','Created');?></th>
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
    </tr>
    <?php endforeach; ?>
    <?php unset ($staff); ?>
</table>
<?php
    echo $this->Paginator->prev(
        '  Prev ', array(), null, array('class' => 'prev disabled')
    );
    echo $this->Paginator->numbers(array('separator' => ' '));
    echo $this->Paginator->next(
        ' Next ', array(), null, array('class' => 'next disabled')
    );
?>