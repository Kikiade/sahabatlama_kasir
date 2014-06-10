<div class="line"></div>

<!-- Main content wrapper -->
    <div class="wrapper">
    
        
        <!-- Form -->
        <form action="add.ctp" class="form">
        <?php echo $this->Form->Create ('Customer', array('url' => 'Customers/add', 'class' => 'form'));?>
            <fieldset>
                <div class="widget">
       			 <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add New Customers</h6></div>
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
                 	echo $this->Form ->input('vehicle_number', array(
						'label'		=> 'Vehicle Number(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'Vehicle Number'
						
					));
				 ?>
                 <?php
                 	echo $this->Form->input('vehicle_category_id', array(
						'label'			=> 'Vehicle Category Name (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'empty'			=> "Select Vehicle Category Name",
						'options' 		=> $vehicle_categories
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
        </form>
    </div>