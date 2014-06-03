<h1>Customers</h1>

<?php
    echo $this->Html->link('Add Customers', array('cotroller' => 'customers', 'action' => 'add'));
?>

<fieldset>
<table style="border:solid">
    <tr>
    	<th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('id','ID');?></th>
        <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('name','Nama');?></th>
        <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('vehicle_number','Vehicle Number');?></th>
	<th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></th>
        <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('status','Status');?></th>
        <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('created','Created');?></th>
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
<?php
    echo $this->Paginator->prev(
        '  Prev ', array(), null, array('class' => 'prev disabled')
    );
    echo $this->Paginator->numbers(array('separator' => ' '));
    echo $this->Paginator->next(
        ' Next ', array(), null, array('class' => 'next disabled')
    );
?>