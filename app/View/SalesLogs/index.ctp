<h1>Index Sales Log</h1>

<fieldset>
<table>
<tr>
	<th><?php echo $this->Paginator->sort('id','ID');?></th>
	<th><?php echo $this->Paginator->sort('Staff','Staff');?></th>
	<th><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></th>
	<th><?php echo $this->Paginator->sort('VehicleCategory','Price');?></th>
	<th><?php echo $this->Paginator->sort('VehicleCategory','Nyuci Share');?></th>
	<th><?php echo $this->Paginator->sort('transaction_time','Transaction Time');?></th>
	<th>Action</th>
</tr>

<?php foreach ($sales_logs as $saleslog); ?>
<tr>
<td><?php echo $saleslog['SalesLog']['id'] ?></td>
<td><?php echo $saleslog['Staff']['name'] ?></td>
<td><?php echo $saleslog['VehicleCategory']['name'] ?></td>
<td><?php echo $saleslog['VehicleCategory']['price'] ?></td>
<td><?php echo $saleslog['VehicleCategory']['nyuci_share'] ?></td>
<td><?php echo $saleslog['SalesLog']['transaction_time'] ?></td>
<td>
	<?php echo $this->Html->link('View', array('action' => 'view', $saleslog['SalesLog']['id'])); ?>
</td>
</tr>
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