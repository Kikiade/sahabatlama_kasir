<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>View</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/newscomments" title="View List"><span class="views"></span></a>
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
                <h6>View Comment</h6></div>
                <div class="formRow">
                  <label>Name :</label>
                  <div class="formRight"><label><?php echo $post['NewsComment']['name'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Email :</label>
                  <div class="formRight"><label><?php echo $post['NewsComment']['email'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Comment :</label>
                  <div class="formRight"><label><?php echo $post['NewsComment']['comment'] ?></label></div>
                </div>
                <div class="formRow">
                  <label>Created :</label>
                  <div class="formRight"><label><?php echo $post['NewsComment']['created'] ?></label></div>
                </div>
            </div>
            <div class="widget content" style="">
              <div class="body textC">
              <a href="http://localhost/sl_kasir/newscomments/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/newscomments/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
           </div>
</div>