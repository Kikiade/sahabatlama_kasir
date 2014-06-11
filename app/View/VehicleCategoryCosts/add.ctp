<div class="line"></div>

<!-- Main content wrapper -->
    <div class="wrapper">
    
        
        <!-- Form -->
        <?php echo $this->Form->create('VehicleCategoryCost', array('url' => '/VehicleCategoryCosts/add', 'class' => 'form'));?>
            <fieldset>
                <div class="widget">
       			 <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add New Vehicle Category Costs</h6></div>
                 <?php 
				 	echo $this->Form->input('name', array(
						'label'		=> 'Name(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'error'		=> array('attributes' => array('wrap' => 'label', 'class' => 'formError')),
						'placeholder'	=> 'Name'
					));
					
				 ?>
                 <?php
                 	echo $this->Form ->input('cost', array(
						'type'		=> 'text',
						'label'		=> 'Cost(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'Cost'
					));
				 ?>
                 <?php
                 	echo $this->Form->input('vehicle_category_id', array(
						'label'			=> 'Vehicle Category Name (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'empty'			=> "Select Vehicle Category Name",
						'options' 		=> array($vehicle_categories
											)
					));
				 ?>   
                 <?php
                 	echo $this->Form->input('status', array(
						'label'			=> 'Status (*)',
						'div'			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after'			=> '</div>',
						'empty'			=> 'Select Status',
						'options' 		=> array(
											0 => 'Not Active',
											1 => 'Active'
	                    				),
	     			               		'selected' => 1
					));
				 ?>
                <div class="formSubmit"> 
	                    <input class="basic" value="Reset" type="reset" />
	                    <input class="redB" value="Save" type="submit" />
				</div>
            </fieldset>
    </div>
 </div> 