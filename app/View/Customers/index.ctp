<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/Customers/add" title="Add"><span class="users"></span></a>
                <ul class="mSub1">
                  <li><a href="#" title="">Add user</a></li>
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
     <h1>Customers</h1>
        
      <!-- Customers -->
       <div class="widget">
        <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Customers</h6></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
        <thead>
            <tr>
                <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                <td><center><?php echo $this->Paginator->sort('name','Nama');?></center></td>
                <td><center><?php echo $this->Paginator->sort('vehicle_number','Vehicle Number');?></center></td>
                <td><center><?php echo $this->Paginator->sort('VehicleCategory','Vehicle Category Name');?></center></td>
                <td><center><?php echo $this->Paginator->sort('status','Status');?></center></td>
                <td><center><?php echo $this->Paginator->sort('created','Created');?></center></td>
                <td><center>Action</center></td>
            </tr>
        </thead>    
            <?php foreach($customers as $customer): ?>
            <tbody>
            <tr>
                <td><?php echo $customer['Customer']['id']; ?></td>
                <td><?php echo $customer['Customer']['name']; ?></td>
                <td><?php echo $customer['Customer']['vehicle_number']; ?></td>
                <td><?php echo $customer['VehicleCategory']['name']; ?></td>
<<<<<<< HEAD
                <td>
		    <?php
			if($customer['Customer']['status'] == 0){
			    echo "Not Active";
			}else{
			    echo "Active";
			}
		    ?>
		</td>
=======
                <td><?php 
                        if($customer['Customer']['status'] == 1){
                                echo "Active";
                        }
                        else{
                                echo "Not Active";
                        }
                    ?>
                </td>
>>>>>>> 090e7ede05e1f8eaa1d89a1f18dfac94d1b9803f
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