<div class="line"></div>
 
<!-- Main content wrapper -->
 <div class="wrapper">
   <br />
        <h1>Sales Log</h1>
        
        <!-- Sales Log -->
       	<div class="widget">
         <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Sales Log</h6></div>
         <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
         <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id','ID');?></th>
                <th><?php echo $this->Paginator->sort('Staff','Staff');?></th>
                <th><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></th>
                <th><?php echo $this->Paginator->sort('VehicleCategory','Price');?></th>
                <th><?php echo $this->Paginator->sort('VehicleCategory','Nyuci Share');?></th>
                <th><?php echo $this->Paginator->sort('transaction_time','Transaction Time');?></th>
                <th>Action</th>
            </tr>
         </thead>
        	<?php foreach ($sales_logs as $saleslog): ?>
            <tbody>
            <tr>
                <td><?php echo $saleslog['SalesLog']['id'] ?></td>
                <td><?php echo $saleslog['Staff']['name'] ?></td>
                <td><?php echo $saleslog['VehicleCategory']['name'] ?></td>
                <td><?php echo $saleslog['VehicleCategory']['price'] ?></td>
                <td><?php echo $saleslog['VehicleCategory']['nyuci_share'] ?></td>
                <td><?php echo $saleslog['SalesLog']['transaction_time'] ?></td>
                <td>
                    <?php echo $this->Html->link('View', array('action' => 'view', $saleslog['SalesLog']['id'])); ?>
                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $saleslog['SalesLog']['id'])); ?>
                    <?php echo $this->Html->link('Delete', array('action' => 'delete', $saleslog['SalesLog']['id'])); ?>
                </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
           	<?php unset ($saleslog); ?>
        </table>
        </div>
        <?php
            echo $this->Paginator->prev(
                '  Prev ', array(), null, array('class' => 'prev disabled')
            );
            echo $this->Paginator->numbers(array('separator' => ' '));
            echo $this->Paginator->next(
                ' Next ', array(), null, array('class' => 'next disabled')
            );
        ?>
</div>