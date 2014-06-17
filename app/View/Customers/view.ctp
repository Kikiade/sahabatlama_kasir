<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>View</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/Customers" title="View List"><span class="views"></span></a>
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
                <h6>View Customer</h6></div>
                <div class="formRow">
                  <label>Name :</label>
                  <div class="formRight"><label><?php echo $post['Customer']['name'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Vehicle Number :</label>
                  <div class="formRight"><label><?php echo $post['Customer']['vehicle_number'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Created :</label>
                  <div class="formRight"><label><?php echo $post['Customer']['created'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Status :</label>
                    <div class="formRight">
                      <label>
                        <?php if($post['Customer']['status'] == 1)
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
              <a href="http://localhost/sl_kasir/customers/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/customers/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
           </div>
</div>