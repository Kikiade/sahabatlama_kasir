<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Sales Log</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               
             </ul>
           </div>
   </div>
 </div>
 
<div class="line"></div>
 
<!-- Main content wrapper -->
 <div class="wrapper">
   <br />
       <!-- Breadcrumbs -->
       <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                 <li>
                      <a href="http://localhost/sl_kasir">Dashboard</a>
                 </li>
                 <li class="current"><a href="http://localhost/sl_kasir/saleslogs">View Content</a></li>
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
                <?php //echo $form->input('search'); ?>
                  <input name="data[Search][reset]" type="hidden" value="0" id="reset">
                  
                  <fieldset>
                    <?php
                      echo $this->Form->input('id', array(
                        'label'     =>  '::ID::',
                        'div'       =>  array("class"=>"dataTables_filter"),
                        'between'   =>  '<div class="formRight">',
                        'after'     =>  '</div>',
                        'empty'     =>  'Title'
                      ));
                    ?>
                    <?php
                      echo $this->Form->input('title', array(
                        'label'     =>  '::Title::',
                        'div'       =>  array("class"=>"dataTables_filter"),
                        'between'   =>  '<div class="formRight">',
                        'after'     =>  '</div>',
                        'empty'     =>  'Title'
                      ));
                    ?>
                  </fieldset>
                <?php $this->Form->end();?>
                <a href="javascript:void(0);" title="" class="wButton bluewB ml15 m10" onclick="return SearchAdvance();"><span>Search</span></a>
                <a href="javascript:void(0);" title="" class="wButton redwB ml15 m10" onclick="ClearSearchAdvance();"><span>Reset</span></a>
              </div>
            </div>
          </div>
          <!-- END SEARCH -->
        <!-- Sales Log -->
       	<div class="widget">
           <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/frames.png" alt="" class="titleIcon" /><h6>Sales Log</h6></div>
           <table cellpadding="0" cellspacing="0" width="100%" class="display sTable">
             <thead>
                <tr>
                    <td><center>Name</center></td>
                    <td><center>Share</center></td>
                    
                </tr>
             </thead>
            	<?php foreach ($data as $data): ?>
                <tbody>
                  <tr>
                      <td><?php echo $data['Staff']['name'] ?></td>
                      <td><?php echo $data['0']['TOTAL'] ?></td>
                      
                  </tr>
                </tbody>
              <?php endforeach; ?>
              <?php unset ($saleslog); ?>
            </table>
        </div>
      <!--  
        <div class="pagination">
            <ul class="pages">
                  <?php
                  /*
                        echo $this->Paginator->prev(__('<'), array(
            							'tag' => 'li',
            							'class' => 'prev disabled'
            						));
                                    echo $this->Paginator->numbers(array(
            															  'separator' => ' ',
            															  'tag' => 'li',
            															  'currentClass' => 'active',
            															  '' => ''
                                  ));
                                    echo $this->Paginator->next(__('>'), array(
            							'tag' => 'li',
            							'class' => 'next disabled'
            						)
                      );
                     */ 
                  ?>
            </ul>
        </div>
      -->
</div>