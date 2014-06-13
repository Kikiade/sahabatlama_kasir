<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Add New Vehicle Categories</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
             	<li class="mUser"><a href="http://localhost/sl_kasir/VehicleCategories" title="View"><span class="views"></span></a>
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
    
        
        <!-- Form -->
        <?php echo $this->Form->create('VehicleCategory', array('url' => '/VehicleCategories/add', 'class' => 'form'));?>
            <fieldset>
                <div class="widget">
       			 <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add New Vehicle Category </h6>
                 </div>
                 <?php 
				 	echo $this->Form->input('name', array(
						'label'		=> 'Name(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'Name'
					));
				 ?>
                 <?php 
				 	echo $this->Form->input('price', array(
						'type'		=> 'text',
						'label'		=> 'Price(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> '10000'
					));
				 ?>
                 <?php
                 	echo $this->Form->input('nyuci_share', array(
						'type'		=> 'text',
						'label'		=> 'Nyuci Share(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'Placeholder' => '1000'
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