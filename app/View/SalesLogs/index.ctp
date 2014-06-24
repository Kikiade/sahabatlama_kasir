<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Sales Log</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir" title=""><span class="users"></span></a>
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