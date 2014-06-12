<div id="rightSide">
<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/VehicleCategories/Add" title="Add"><span class="users"></span></a>
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
	<h1>Vehicle Categories</h1>

        <div class="widget">
          <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Vehicle Categories		</h6></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
             <thead>
                <tr class="gradeA">
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('name','Name');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('price','Price');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('created','Created');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('status','Status');?></center></td>
                    <td><center>Action</center></td>
                </tr>
             </thead>
                	<?php foreach($vehicle_categories as $categories): ?>
                     <tbody>
                		<tr class="gradeA">
                    		<td><?php echo $categories['VehicleCategory']['id']; ?></td>
                    		<td><?php echo $categories['VehicleCategory']['name']; ?></td>
                    		<td><?php echo $categories['VehicleCategory']['price']; ?></td>

                		<td><?php echo $categories['VehicleCategory']['created']; ?></td>
                    		<td>
				    <?php
					if($categories['VehicleCategory']['status'] == 0){
					    echo "Not Active";
					}else{
					    echo "Active";    
					}
				    ?>
				</td>

                			<td><?php echo $categories['VehicleCategory']['created']; ?></td>
                    		<td><?php 
                                    if($categories['VehicleCategory']['status'] == 1){
                                            echo "Active";
                                        }
                                        else{
                                            echo "Not Active";
                                        }
                                 ?>
                            </td>

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
         <div class="pagination">
            <ul class="pages">
                  <?php
                        echo $this->Paginator->prev(__('<'), array(
							'tag' => 'li',
							'class' => 'prev disabled'
						));
                        echo $this->Paginator->numbers(array(
															  'separator' => ' ',
															  'tag' => 'li',
															  'currentClass' => 'active',
                      ));
                        echo $this->Paginator->next(__('>'), array(
							'tag' => 'li',
							'class' => 'next disabled'
						)
                      );
                  ?>
               </ul>
           </div>
</div>