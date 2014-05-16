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
    <?php foreach($vehicle_categories as $category): ?>
    <tr>
        <td><?php echo $category['Category']['id']; ?></td>
        <td><?php echo $category['Category']['name']; ?></td>
        <td><?php echo $category['Category']['price']; ?></td>
        <td><?php echo $category['Category']['status']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset ($category); ?>
</table>
</fieldset>