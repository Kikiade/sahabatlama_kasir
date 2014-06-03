<h1>Vehicle Category Cost</h1>
<p><?php echo $this->Html->link('Add Vehicle Category Cost', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id','ID');?></th>
        <th><?php echo $this->Paginator->sort('name','Name');?></th>
        <th><?php echo $this->Paginator->sort('cost', 'Costs');?></th>
        <th><?php echo $this->Paginator->sort('VehicleCategory', 'Vehicle Category Name');?></th>
        <th><?php echo $this->Paginator->sort('status', 'Status');?></th>
        <th><?php echo $this->Paginator->sort('created', 'Created');?></th>
        <th>Action</th>
    </tr>
    <?php foreach ($vehicle_category_costs as $vehiclecategorycost): ?>
        <tr>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['id']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['name']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['cost']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategory']['name']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['status']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['created']; ?></td>
            <td>
                <?php
                    echo $this->Html->link('View', array('action' => 'view', $vehiclecategorycost['VehicleCategoryCost']['id']));
                ?>
            </td>
            <td>
                <?php
                    echo $this->Html->link('Edit', array('action' => 'edit', $vehiclecategorycost['VehicleCategoryCost']['id']));
                ?>
            </td>
            <td>    
                <?php
                    echo $this->Html->link('Delete', array('action' => 'delete', $vehiclecategorycost['VehicleCategoryCost']['id']));
                ?>
            </td>
        </tr>
    <?php endforeach ;?>
    <?php unset($vehiclecategorycost);?>
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