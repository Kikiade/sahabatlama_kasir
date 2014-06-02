<h1>Index Sales Log</h1>

<fieldset>
<table>
<tr>
	<th>Id</th>
	<th>Staff Id</th>
	<th>Vehicle Id</th>
	<th>User Id</th>
	<th>Transaction Time</th>
	<th>Action</th>
</tr>

<?php foreach ($sales_logs as $saleslog); ?>
<tr>
<td><?php echo $saleslog['SalesLog']['id'] ?></td>
<td><?php echo $saleslog['SalesLog']['staff_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['vehicle_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['user_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['transaction_time'] ?></td>
<td>
	<?php echo $this->Html->link('View', array('action' => 'view', $saleslog['SalesLog']['id'])); ?>
	<?php echo $this->Html->link('Edit', array('action' => 'edit', $saleslog['SalesLog']['id'])); ?>
	<?php echo $this->Html->link('Delete', array('action' => 'view', $saleslog['SalesLog']['id'])); ?>
</td>
</tr>
</table>
</fieldset>