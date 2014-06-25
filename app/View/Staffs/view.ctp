<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>View Staffs</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
             	<li class="mUser"><a href="http://localhost/sl_kasir/Staffs" title="View"><span class="views"></span></a>
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
    	
        <!-- View -->
            <div class="widget">
                <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/preview.png" alt="" class="titleIcon" />
                <h6>View Staff</h6></div>
                <div class="formRow">
                  <label>Name :</label>
                  <div class="formRight"><label><?php echo ($staff['Staff']['name']);?></label></div>
                </div>
                <div class="formRow">
                  <label>Address :</label>
                  <div class="formRight"><label><?php echo ($staff['Staff']['address']);?></label></div>
                </div>
                <div class="formRow">
                  <label>Created :</label>
                  <div class="formRight"><label><?php echo ($staff['Staff']['created']);?></label></div>
                </div>
                <div class="formRow">
                  <label>Status :</label>
                    <div class="formRight">
                      <label>
                        <?php if($staff['Staff']['status'] == 1)
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
              	<a href="http://localhost/sl_kasir/staffs/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/staffs" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
            </div>
</div>

