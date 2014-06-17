<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>View Content</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir" title="View List"><span class="views"></span></a>
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
                <h6>View Content</h6></div>
                <div class="formRow">
                  <label>Model ID :</label>
                  <div class="formRight"><label><?php echo $contents['NewsContents']['id']?></label></div>
                </div>
                <div class="formRow">
                  <label>Model Name :</label>
                  <div class="formRight"><label><?php echo $contents['Content']['model_name']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>Type :</label>
                  <div class="formRight"><label><?php echo $contents['Content']['type']; ?></label></div>
                </div>
		<div class="formRow">
		  <label>Host :</label>
		  <div class="formRight"><label><?php echo $contents['NewsContents']['name']?></label></div>
		</div>
		<div class="formRow">
		  <label>URL :</label>
		  <div class="formRight"><label><?php echo $contents['Content']['url']?></label></div>
		</div>
            </div>
            <div class="widget content" style="">
              <div class="body textC">
                <a href="http://localhost/sl_kasir/vehcilecategorycost/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/VehicleCategoryCosts" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
            </div>
</div>