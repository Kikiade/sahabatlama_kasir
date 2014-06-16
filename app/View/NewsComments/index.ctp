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
                      <a href="#">Dashboard</a>
                 </li>
                 <li>
                      <a href="#">Content stuff</a>
                 </li>
                 <li>
                      <a href="#">Tables</a>
                 </li>
                 <li class="current"><a href="#">Current page</a></li>
            </ul>
        </div>
        
      <!-- comment -->
       <div class="widget">
        <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Comment</h6></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
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
                <td><center>
                    <?php echo $this->Html->link('View', array('controller' => 'news_comments', 'action' => 'view', $comment['NewsComment']['id'])); ?> 
                    <?php echo $this->Html->link('Edit', array('controller' => 'news_comments', 'action' => 'edit', $comment['NewsComment']['id'])); ?>
                    <?php echo $this->Html->link('Delete', array('controller' => 'news_comments', 'action' => 'delete', $comment['NewsComment']['id'])); ?>
                 </center></td> 
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