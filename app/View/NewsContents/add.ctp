<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Add New News Content</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
             	<li class="mUser"><a href="http://localhost/sl_kasir/" title="View"><span class="views"></span></a>
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
        <?php echo $this->Form->create('NewsContent', array('url' => '', 'class' => 'form'));?>
            <fieldset>
                <div class="widget">
       			 <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add New News Content </h6>
                 </div>
                 <?php 
					 echo $this->Form->input('title', array(
						'label'		=> 'Title(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'Title'
						));
	 	 		 ?>
		 		 <?php
					 echo $this->Form->input('description', array(
						'label'		=> 'Description(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder' 	=> 'Description'
 					));
		 		 ?>
		 		 <?php
					 echo $this->Form->input('posted', array(
						'label'		=> 'posted (*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'posted'
						));
		 		 ?>
		 		 <?php
                 	 echo $this->Form->input('news_category_id', array(
						'label'			=> 'News Category Name (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'empty'			=> "Select News Category Name",
						'options' 		=> $news_categories
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
				 <?php
				 	echo $this->Form->create('Content'); 
				 ?>
				 <?php
				 	echo $this->Form->input('model_name', array(
						'label'			=> 'Model Name (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'placeholder'	=> 'Model Name'
						)); 
				 ?>
				 <?php
				 	echo $this->Form->input('type', array(
						'label'			=> 'type (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'placeholder'	=> 'Type'
						)); 
				 ?>
				 <?php
				 	echo $this->Form->input('host', array(
						'label'			=> 'Host (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'placeholder'	=> 'Model Name',
						'default' 		=> "http://localhost/sl_kasir/"
						)); 
				 ?>
                        <div class="formSubmit"> 
                                <input class="basic" value="Reset" type="reset" />
                                <input class="redB" value="Save" type="submit" />
                        </div>
            </fieldset>
         </div>
      </div>
