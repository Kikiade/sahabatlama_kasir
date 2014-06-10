<div id="rightSide">
<div class="line"></div>
    
<!-- Main content wrapper -->
 <div class="wrapper">
 <br />
	<h1>Vehicle Category Cost</h1>

        <div class="widget">
          <div class="title"><img src="<?php echo $this->webroot; ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Vehicle Category Cost		</h6></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
             <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id','ID');?></th>
                    <th><?php echo $this->Paginator->sort('name','Name');?></th>
                    <th><?php echo $this->Paginator->sort('cost', 'Costs');?></th>
                    <th><?php echo $this->Paginator->sort('VehicleCategory', 'Vehicle Category Name');?></th>
                    <th><?php echo $this->Paginator->sort('status', 'Status');?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Created');?></th>
                    <th>Action</th>
                </tr>
              </thead>  
                <?php foreach ($vehicle_category_costs as $vehiclecategorycost): ?>
                <tbody>
                    <tr>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['id']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['name']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['cost']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategory']['name']; ?></td>
                        <td><?php echo $vehiclecategorycost ['VehicleCategoryCost']['status']; ?></td>
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
                    '  Prev ', array(), null, array('class' => 'prev disabled')
                );
                echo $this->Paginator->numbers(array('separator' => ' '));
                echo $this->Paginator->next(
                    ' Next ', array(), null, array('class' => 'next disabled')
                );
            ?>
	</div>		