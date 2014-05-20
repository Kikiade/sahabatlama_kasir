<h1>Category</h1>

<?php
    echo $this->Html->link('Add Category', array('cotroller' => 'vehicle_categories', 'action' => 'add'));
?>

<fieldset>
<table style="border:solid">
    <tr>
    	<th style="border:solid; border-width:1px">Id</th>
        <th style="border:solid; border-width:1px">Nama</th>
        <th style="border:solid; border-width:1px">Price</th>
        <th style="border:solid; border-width:1px">Status</th>
        <th style="border:solid; border-width:1px">Action</th>
    </tr>
    <?php foreach($vehicle_categories as $categories): ?>
    <tr>
        <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['id']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['name']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['price']; ?></td>
        <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['status']; ?></td>
        <td style="border:solid; border-width:1px">
			<?php echo $this->Html->link('View', array('controller' => 'vehicle_categories', 'action' => 'view', $categories['VehicleCategory']['id'])); ?> <?php echo $this->Html->link('Edit', array('controller' => 'vehicle_categories', 'action' => 'edit', $categories['VehicleCategory']['id'])); ?></td> 
    </tr>
    <?php endforeach; ?>
    <?php unset ($categories); ?>
</table>
</fieldset>