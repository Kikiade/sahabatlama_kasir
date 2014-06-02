<h1>Customers</h1>

<?php
    echo $this->Html->link('Add Customers', array('cotroller' => 'customers', 'action' => 'add'));
?>

<fieldset>
<table style="border:solid">
    <tr>
    	<th style="border:solid; border-width:1px">Id</th>
        <th style="border:solid; border-width:1px">Nama</th>
        <th style="border:solid; border-width:1px">Vehicle Number</th>
	<th style="border:solid; border-width:1px">Vehicle Category Name</th>
        <th style="border:solid; border-width:1px">Status</th>
        <th style="border:solid; border-width:1px">Created</th>
        <th style="border:solid; border-width:1px">Action</th>
    </tr>
    <?php foreach($customers as $customer): ?>
    <tr>
        <td style="border:solid; border-width:1px"><?php echo $customer['Customer']['id']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $customer['Customer']['name']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $customer['Customer']['vehicle_number']; ?></td>
	<td style="border:solid; border-width:1px"><?php echo $customer['VehicleCategory']['name']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $customer['Customer']['status']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $customer['Customer']['created']; ?></td>
        <td style="border:solid; border-width:1px" width="200px">
			<?php echo $this->Html->link('View', array('controller' => 'customers', 'action' => 'view', 
				$customer['Customer']['id'])); ?> 
			<?php echo $this->Html->link('Edit', array('controller' => 'customers', 'action' => 'edit', 
				$customer['Customer']['id'])); ?>
            <?php echo $this->Html->link('Delete', array('controller' => 'customers', 'action' => 'delete', 
				$customer['Customer']['id'])); ?>
         </td> 
    </tr>
    <?php endforeach; ?>
    <?php unset ($customer); ?>
</table>
</fieldset>