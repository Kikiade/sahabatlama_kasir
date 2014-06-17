<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>News Categpry</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir" title="Add"><span class="users"></span></a>
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
        
        <!-- Sales Log -->
       	<div class="widget">
         <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>News Category</h6></div>
         <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
         <thead>
                <tr>
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('name','Nama');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('status','Status');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('created','Created');?></center></td>
                    <td><center>Action</center></td>
                </tr>
          </thead>       
                <?php foreach($newscategories as $newscategory): ?>
                <tbody>
                <tr>
                    <td><?php echo $newscategory['NewsCategory']['id']; ?></td>
                    <td><?php echo $newscategory['NewsCategory']['name']; ?></td>
                    <td>
                        <?php 
                            if($newscategory['NewsCategory']['status'] == 1){
                                echo "Active";
                            }else{
                                echo "Not Active";
                            }
                        ?>
                    </td>
                    <td><?php echo $newscategory['NewsCategory']['created']; ?></td>
                    <td>
                        <?php
                            echo $this->Html->link('View', array('action' => 'view', $newscategory['NewsCategory']['id']));
                        ?>
                        <?php
                            echo $this->Html->link('Edit', array('action' => 'edit', $newscategory['NewsCategory']['id']));
                        ?>
                        <?php
                            echo $this->Form->postlink('Delete', array('action' => 'delete', $newscategory['NewsCategory']['id']),
                                                       array('confirm'=>'Are you sure'));
                        ?>
                    </td>    
                </tr>
                </tbody>
                <?php endforeach; ?>
                <?php unset ($newscategory); ?>
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