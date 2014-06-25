<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Vehicle Category Cost</h5>
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
	<!-- Breadcrumbs -->
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                 <li>
                      <a href="http://localhost/sl_kasir/">Dashboard</a>
                 </li>
                 <li class="current"><a href="http://localhost/sl_kasir/VehicleCategoryCosts">View Content</a></li>
            </ul>
        </div>

        <!-- START SEARCH  -->
          <div class="span6">
            <div class="toggle" style="border-color:#a0a0a0;">
              <div class="title closed" id="toggleOpened" style="border-color:#a0a0a0;">
                <img src="<?php echo $this->webroot?>img/icons/dark/magnify.png" alt="" class="titleIcon"/>
                <h6 class="red">Search</h6>
              </div>
              <div class="body" style="border-color:#a0a0a0;"> 
                <?php echo $this->Form->Create('search'); ?>
                  <input name="data[Search][reset]" type="hidden" value="0" id="reset">
                  <?php //if(!empty($result)): ?>
                  <fieldset>
                    <?php
                      echo $this->Form->input('id', array(
                        'label'     =>  '::ID::',
                        'div'       =>  array("class"=>"dataTables_filter"),
                        'between'   =>  '<div class="formRight">',
                        'after'     =>  '</div>',
                        'empty'     =>  'Title',
                      ));
                    ?>
                    <?php
                      echo $this->Form->input('name', array(
                        'label'     =>  '::Nama::',
                        'div'       =>  array("class"=>"dataTables_filter"),
                        'between'   =>  '<div class="formRight">',
                        'after'     =>  '</div>',
                        'empty'     =>  'Title',
                      ));
                    ?>
                  </fieldset>
                <?php $this->Form->end('Search');?>
                <a href="javascript:void(0);" title="" class="wButton bluewB ml15 m10" onclick="return SearchAdvance();"><span>Search</span></a>
                <a href="javascript:void(0);" title="" class="wButton redwB ml15 m10" onclick="ClearSearchAdvance();"><span>Reset</span></a>
              </div>
            </div>
          </div>
              <?php //else: ?>
              <?php //if($this->data): ?>
              <!-- <div id="tahoma"><hr> Sorry, No result found. </div> -->
              <?php //endif; ?>
              <?php //endif; ?> 
        <!-- END SEARCH -->

        <div class="widget">
          <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/frames.png" alt="" class="titleIcon" /><h6>Vehicle Category Cost		</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="display sTable">
             <thead>
                <tr>
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('name','Nama');?></center></td>
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