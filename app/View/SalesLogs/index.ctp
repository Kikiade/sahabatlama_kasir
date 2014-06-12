<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir" title=""><span class="users"></span></a>
                <ul class="mSub1">
                 </ul>
               </li>
             </ul>
           </div>
   </div>
 </div>
 
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
                <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                <td><center><?php echo $this->Paginator->sort('Staff','Staff');?></center></td>
                <td><center><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></center></td>
                <td><center><?php echo $this->Paginator->sort('VehicleCategory','Price');?></center></td>
                <td><center><?php echo $this->Paginator->sort('VehicleCategory','Nyuci Share');?></center></td>
                <td><center><?php echo $this->Paginator->sort('transaction_time','Transaction Time');?></center></td>
                <td><center>Action</center></td>
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