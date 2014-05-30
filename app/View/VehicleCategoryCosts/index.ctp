<h1>Vehicle Category Cost</h1>
<p><?php echo $this->Html->link('Add Vehicle Category Cost', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Costs</th>
        <th>Vehicle Category ID</th>
        <th>Status</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <?php foreach ($vehicle_category_costs as $vehiclecategorycost): ?>
        <tr>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['id']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['name']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['cost']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['vehicle_category_id']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['status']; ?></td>
            <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['created']; ?></td>
            <td><?php echo $this->Html->link('View', array('action' => 'view', $vehiclecategorycost['VehicleCategoryCost']['id']));?></td>
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $vehiclecategorycost['VehicleCategoryCost']['id']));?></td>
            <td><?php echo $this->Html->link('Delete', array('action' => 'delete', $vehiclecategorycost['VehicleCategoryCost']['id']));?></td>
            <td><?php echo $this->Html->link('Hide', array('action' => 'hide', $vehiclecategorycost['VehicleCategoryCost']['id']));?></td>
        </tr>
    <?php endforeach ;?>
    <?php unset ($vehiclecategorycost); ?>
</table>