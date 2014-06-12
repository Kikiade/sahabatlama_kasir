<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/Staffs/add" title="Add"><span class="users"></span></a>
                <ul class="mSub1">
                </ul>
               </li>
             </ul>
           </div>
   </div>
 </div>
<div class="line"></div>
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
 
<!-- Main content wrapper -->
 <div class="wrapper">
   <br />
        <h1>Staff</h1>
        
        <!-- Sales Log -->
       	<div class="widget">
         <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Staff</h6></div>
         <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
         <thead>
                <tr>
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('name','Nama');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('address','Address');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('mobile_phone','Mobile Phone');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('status','Status');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('created','Created');?></center></td>
                    <td><center>Action</center></td>
                </tr>
          </thead>       
                <?php foreach($staffs as $staff): ?>
                <tbody>
                <tr>
                    <td><?php echo $staff['Staff']['id']; ?></td>
                    <td><?php echo $staff['Staff']['name']; ?></td>
                    <td><?php echo $staff['Staff']['address']; ?></td>
                    <td><?php echo $staff['Staff']['mobile_phone']; ?></td>
                    <td>
                        <?php 
                            if($staff['Staff']['status'] == 1){
                                echo "Active";
                            }else{
                                echo "Not Active";
                            }
                        ?>
                    </td>
                    <td><?php echo $staff['Staff']['created']; ?></td>
                    <td>
                        <?php
                            echo $this->Html->link('View', array('action' => 'view', $staff['Staff']['id']));
                        ?>
                        <?php
                            echo $this->Html->link('Edit', array('action' => 'edit', $staff['Staff']['id']));
                        ?>
                        <?php
                            echo $this->Form->postlink('Delete', array('action' => 'delete', $staff['Staff']['id']),
                                                       array('confirm'=>'Are you sure'));
                        ?>
                    </td>    
                </tr>
                </tbody>
                <?php endforeach; ?>
                <?php unset ($staff); ?>
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