<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>News Comment</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/newscomments/add" title="Add"><span class="users"></span></a>
                <ul class="mSub1">
                  <li><a href="#" title="">Add user</a></li>
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
     <!-- Breadcrumbs -->
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                 <li>
                      <a href="http://localhost/sl_kasir/">Dashboard</a>
                 </li>
                 <li class="current"><a href="http://localhost/sl_kasir/newscomments">View Content</a></li>
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
      <!-- comment -->
       <div class="widget">
        <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/frames.png" alt="" class="titleIcon" /><h6>Comment</h6></div>
        <table cellpadding="0" cellspacing="0" width="100%" class="display sTable">
        <thead>
            <tr>
                <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                <td><center><?php echo $this->Paginator->sort('name','Nama');?></center></td>
                <td><center><?php echo $this->Paginator->sort('email','Email');?></center></td>
                <td><center><?php echo $this->Paginator->sort('comment','Comment');?></center></td>
                <td><center><?php echo $this->Paginator->sort('status','Status');?></center></td>
                <td><center>Action</center></td>
            </tr>
        </thead>    
            <?php foreach($news_comments as $comment): ?>
            <tbody>
            <tr>
                <td><?php echo $comment['NewsComment']['id']; ?></td>
                <td><?php echo $comment['NewsComment']['name']; ?></td>
                <td><?php echo $comment['NewsComment']['email']; ?></td>
                <td><?php echo $comment['NewsComment']['comment']; ?></td>                
                <td>
                  <?php
                      if($comment['NewsComment']['status'] == 0){
                              echo "Not Active";
                      }
                      else{
                              echo "Active";
                      }
                  ?>
                </td>
                <td>
                    <?php echo $this->Html->link('View', array('controller' => 'news_comments', 'action' => 'view', $comment['NewsComment']['id'])); ?> 
                    <?php echo $this->Html->link('Edit', array('controller' => 'news_comments', 'action' => 'edit', $comment['NewsComment']['id'])); ?>
                    <?php echo $this->Html->link('Delete', array('controller' => 'news_comments', 'action' => 'delete', $comment['NewsComment']['id'])); ?>
                </td> 
            </tr>
            </tbody>
            <?php endforeach; ?>
            <?php unset ($comment); ?>
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