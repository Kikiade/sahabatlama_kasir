
<div id="rightSide">
<div class="line"></div>
    
<!-- Main content wrapper -->
 <div class="wrapper">
 <br />
	<h1>Category</h1>
		<?php echo $this->Html->link('Add Category', array('cotroller' => 'vehicle_categories', 'action' => 'add'));?>

        <div class="widget">
          <div class="title"><img src="<?php echo $this->webroot; ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Vehicle Categories		</h6></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
             <thead>
                <tr class="gradeA">
                    <th><?php echo $this->Paginator->sort('id','ID');?></th>
                    <th><?php echo $this->Paginator->sort('name','Name');?></th>
                    <th><?php echo $this->Paginator->sort('price','Price');?></th>
                	<th><?php echo $this->Paginator->sort('created','Created');?></th>
                    <th><?php echo $this->Paginator->sort('status','Status');?></th>
                    <th>Action</th>
                </tr>
             </thead>
                	<?php foreach($vehicle_categories as $categories): ?>
                     <tbody>
                		<tr class="gradeA">
                    		<td><?php echo $categories['VehicleCategory']['id']; ?></td>
                    		<td><?php echo $categories['VehicleCategory']['name']; ?></td>
                    		<td><?php echo $categories['VehicleCategory']['price']; ?></td>
                			<td><?php echo $categories['VehicleCategory']['created']; ?></td>
                    		<td><?php echo $categories['VehicleCategory']['status']; ?></td>
                    		<td>
                        		<?php echo $this->Html->link('View', array('controller' => 'vehicle_categories', 'action' => 'view', 
                            	$categories['VehicleCategory']['id'])); ?> 
                        		<?php echo $this->Html->link('Edit', array('controller' => 'vehicle_categories', 'action' => 'edit', 
                            	$categories['VehicleCategory']['id'])); ?>
                        		<?php echo $this->Html->link('Delete', array('controller' => 'vehicle_categories', 'action' => 'delete', 
                            	$categories['VehicleCategory']['id'])); ?>
                     		</td> 
                		</tr>
                    </tbody>
                	<?php endforeach; ?>
                	<?php unset ($categories); ?>
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
</div>