<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Add New Content</h5>
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
        <?php echo $this->Form->create('Content', array('url' => '', 'class' => 'form'));?>
            <fieldset>
                <div class="widget">
       			 <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add Content </h6>
                 </div>
                 <?php 
			echo $this->Form->input('model_id', array(
						'label'		=> 'Model ID(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'options'	=> $news_contents
						));
	 	 ?>
		 <?php
			echo $this->Form->input('model_name', array(
						'label'		=> 'Model Name(*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder' 	=> 'Model Name'
 					));
		 ?>
		 <?php
			echo $this->Form->input('type', array(
						'label'		=> 'Type (*)',
						'div'		=> 'formRow',
						'between'	=> '<div class="formRight">',
						'after'		=> '</div>',
						'placeholder'	=> 'Type'
						));
		 ?>
		 <?php
                 	echo $this->Form->input('host', array(
						'label'			=> 'Host (*)',
						'div' 			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after' 		=> '</div>',
						'placeholder'		=> 'Host'
					));
				 ?>   
                 <?php
                 	echo $this->Form->input('url', array(
						'label'			=> 'URL (*)',
						'div'			=> 'formRow',
						'between'		=> '<div class="formRight">',
						'after'			=> '</div>',
						'placeholder'		=> 'URL'
					));
				 ?>
                        <div class="formSubmit"> 
                                <input class="basic" value="Reset" type="reset" />
                                <input class="redB" value="Save" type="submit" />
                        </div>
            </fieldset>
                </div>
            </div>
