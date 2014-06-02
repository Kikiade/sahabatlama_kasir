<h1>Index Sales Log</h1>

<fieldset>
<table>
<tr>
	<th>Id</th>
	<th>Staff Id</th>
	<th>Vehicle Id</th>
	<th>User Id</th>
	<th>Transaction Time</th>
</tr>

<?php foreach ($sales_logs as $saleslog); ?>
<tr>
<td><?php echo $saleslog['SalesLog']['id'] ?></td>
<td><?php echo $saleslog['SalesLog']['staff_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['vehicle_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['user_id'] ?></td>
<td><?php echo $saleslog['SalesLog']['transaction_time'] ?></td>
</tr>
</table>
</fieldset>