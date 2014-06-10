<div class="line"></div>
 
<!-- Main content wrapper -->
 <div class="wrapper">
   <br />
     <h1>Customers</h1>
        
      <!-- Customers -->
       <div class="widget">
        <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Customers</h6></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id','ID');?></th>
                <th><?php echo $this->Paginator->sort('name','Nama');?></th>
                <th><?php echo $this->Paginator->sort('vehicle_number','Vehicle Number');?></th>
                <th><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></th>
                <th><?php echo $this->Paginator->sort('status','Status');?></th>
                <th><?php echo $this->Paginator->sort('created','Created');?></th>
                <th>Action</th>
            </tr>
        </thead>    
            <?php foreach($customers as $customer): ?>
            <tbody>
            <tr>
                <td><?php echo $customer['Customer']['id']; ?></td>
                <td><?php echo $customer['Customer']['name']; ?></td>
                <td><?php echo $customer['Customer']['vehicle_number']; ?></td>
                <td><?php echo $customer['VehicleCategory']['name']; ?></td>
                <td><?php echo $customer['Customer']['status']; ?></td>
                <td><?php echo $customer['Customer']['created']; ?></td>
                <td>
                    <?php echo $this->Html->link('View', array('controller' => 'customers', 'action' => 'view', 
                        $customer['Customer']['id'])); ?> 
                    <?php echo $this->Html->link('Edit', array('controller' => 'customers', 'action' => 'edit', 
                        $customer['Customer']['id'])); ?>
                    <?php echo $this->Html->link('Delete', array('controller' => 'customers', 'action' => 'delete', 
                        $customer['Customer']['id'])); ?>
                 </td> 
            </tr>
            </tbody>
            <?php endforeach; ?>
            <?php unset ($customer); ?>
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