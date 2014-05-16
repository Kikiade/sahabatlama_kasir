<h1>Category</h1>

<?php
    echo $this->Html->link(
        'Add Category',
        array('controller' => 'vehicle_categories', 'action','add')
    );
?>

<fieldset>
<table style="border:solid">
    <tr>
    	<th>Id</th>
        <th>Nama</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    <?php foreach($vehicle_categories as $categories): ?>
    <tr>
        <td><?php echo $categories['VehicleCategory']['id']; ?></td>
        <td><?php echo $categories['VehicleCategory']['name']; ?></td>
        <td><?php echo $categories['VehicleCategory']['price']; ?></td>
        <td><?php echo $categories['VehicleCategory']['status']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset ($category); ?>
</table>
</fieldset>