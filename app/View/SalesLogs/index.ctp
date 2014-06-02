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

<?php foreach ($sales_logs as $SalesLog); ?>
<tr>
<td><?php echo $SalesLog['SalesLog']['id'] ?></td>
<td><?php echo $SalesLog['SalesLog']['staff_id'] ?></td>
<td><?php echo $SalesLog['SalesLog']['vehicle_id'] ?></td>
<td><?php echo $SalesLog['SalesLog']['user_id'] ?></td>
<td><?php echo $SalesLog['SalesLog']['transaction_time'] ?></td>
</tr>
</table>
</fieldset>