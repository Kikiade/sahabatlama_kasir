<<<<<<< HEAD

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
=======
<div id="rightSide">
            <div class="wrapper">
                <div class="pageTitle">
                    <h5>Vehiecle Category</h5>
                </div>
                <div class="middleNav">
                    <ul>
                        <li class="mUser"><a href="../../webroot/img/icons/light/add.png"></span></a></li>
                    </ul>
                </div>
            </div>

        <div class="line"></div>
        <!-- HEADER -->

        <!-- CONTENT -->
        <div class="wrapper">
            <div id="contents_area">
>>>>>>> d96e3e1d8da2cef023e08c66796f4ba63349bc5d
            
            </div>
        </div>
        
        <?php
            echo $this->Html->link('Add Category', array('cotroller' => 'vehicle_categories', 'action' => 'add'));
        ?>
        
        <fieldset>
        <table style="border:solid">
            <tr>
                <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('id','ID');?></th>
                <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('name','Name');?></th>
                <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('price','Price');?></th>
            <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('created','Created');?></th>
                <th style="border:solid; border-width:1px"><?php echo $this->Paginator->sort('status','Status');?></th>
                <th style="border:solid; border-width:1px">Action</th>
            </tr>
            <?php foreach($vehicle_categories as $categories): ?>
            <tr>
                <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['id']; ?></td>
                <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['name']; ?></td>
                <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['price']; ?></td>
            <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['created']; ?></td>
                <td style="border:solid; border-width:1px"><?php echo $categories['VehicleCategory']['status']; ?></td>
                <td style="border:solid; border-width:1px" width="200px">
                    <?php echo $this->Html->link('View', array('controller' => 'vehicle_categories', 'action' => 'view', 
                        $categories['VehicleCategory']['id'])); ?> 
                    <?php echo $this->Html->link('Edit', array('controller' => 'vehicle_categories', 'action' => 'edit', 
                        $categories['VehicleCategory']['id'])); ?>
                    <?php echo $this->Html->link('Delete', array('controller' => 'vehicle_categories', 'action' => 'delete', 
                        $categories['VehicleCategory']['id'])); ?>
                 </td> 
            </tr>
            <?php endforeach; ?>
            <?php unset ($categories); ?>
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
</div>