<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Dashboard</h5>
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

<!-- Main Content Wrapper -->
<div class="wrapper">
   <br />
	<h1>View</h1>
    	
        <!-- View -->
            <div class="widget">
                <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/preview.png" alt="" class="titleIcon" />
                <h6>View Vehicle Category</h6></div>
                <div class="formRow">
                  <label>Staff Name :</label>
                  <div class="formRight"><label><?php echo $post['SalesLog']['staff_id']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>Vehicle Name :</label>
                  <div class="formRight"><label><?php echo $post['SalesLog']['vehicle_id']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>User Name :</label>
                  <div class="formRight"><label><?php echo $post['SalesLog']['user_id']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>Transaction Time</label>
                  <div class="formRight"><label><?php echo $post['SalesLog']['transaction_time'];?></label></div>
                </div>
                <div class="formRow">
                  <label>Created :</label>
                  <div class="formRight"><label><?php echo $post['SalesLog']['created'];?></label></div>
                </div>
                <div class="formRow">
                  <label>Status :</label>
                    <div class="formRight">
                      <label>
                        <?php if($post['SalesLog']['status'] == 1)
                           {
                             echo "Active";
                           }
                           else{
                             echo "Not Active";
                           }
                         ?>
                      </label>
                    </div>
                </div>
            </div>
            <div class="widget content" style="">
              <div class="body textC">
                <a href="http://localhost/sl_kasir/saleslogs/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
           </div>
</div>