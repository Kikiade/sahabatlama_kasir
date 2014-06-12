<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/VehicleCategoryCosts/Add" title=""><span class="users"></span></a>
                <ul class="mSub1">
                 </ul>
               </li>
             </ul>
           </div>
   </div>
 </div>


<div id="rightSide">
<div class="line"></div>
    
<!-- Main content wrapper -->
 <div class="wrapper">
 <br />
	<h1>Vehicle Category Cost</h1>

        <div class="widget">
          <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Vehicle Category Cost		</h6></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
             <thead>
                <tr>
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('name','Name');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('cost', 'Costs');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('VehicleCategory', 'Vehicle Category Name');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('status', 'Status');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('created', 'Created');?></center></td>
                    <td><center>Action</center></td>
                </tr>
              </thead>  
                <?php foreach ($vehicle_category_costs as $vehiclecategorycost): ?>
                <tbody>
                    <tr>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['id']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['name']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['cost']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategory']['name']; ?></td>
                        <td>
                            <?php
                                if($vehiclecategorycost['VehicleCategoryCost']['status'] == 0)
                                    {
                                        echo 'Not Active';
                                    }
                                        else{
                                            echo 'Active';
                                    } 
                            ?>
                        </td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['created']; ?></td>
                        <td>
                            <?php
                                echo $this->Html->link('View', array('action' => 'view', $vehiclecategorycost['VehicleCategoryCost']['id']));
                            ?>
                            <?php
                                echo $this->Html->link('Edit', array('action' => 'edit', $vehiclecategorycost['VehicleCategoryCost']['id']));
                            ?>  
                            <?php
                                echo $this->Html->link('Delete', array('action' => 'delete', $vehiclecategorycost['VehicleCategoryCost']['id']));
                            ?>
                        </td>
                    </tr>
                 </tbody>    
                 <?php endforeach ;?>
                 <?php unset($vehiclecategorycost);?>
            </table>
            </div>
                  <?php
                        echo $this->Paginator->prev(
                            'Prev', array(), null, array('class' => 'off', 'div' => 'pagination', 'between' => '<ul class="pages"', 'after' => '</div>')
                      );
                        echo $this->Paginator->numbers(array(
                                                              'before' => '<div class="pagination"><ul class="pages">',
                                                              'separator' => ' ',
                                                              'currentClass' => 'active',
                                                              'tag' => 'li',
                                                              'after' => '</ul></div>'
                      ));
                        echo $this->Paginator->next(
                            'Next', array(), null, array('class' => 'next disabled')
                      );
                  ?>
	</div>		