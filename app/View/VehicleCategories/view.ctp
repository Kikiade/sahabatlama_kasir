<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>View Vehicle Category</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/VehicleCategories" title="View List"><span class="views"></span></a>
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
                <h6>View Vehicle Category</h6></div>
                  <div class="formRow">
                  	<label>Vehicle Name :</label>
    			  	 <div class="formRight"><label><?php echo $post['VehicleCategory']['name']?></label></div>
                   </div>
                   <div class="formRow">
                  	<label>Price :</label>
    			  	 <div class="formRight"><label><?php echo $post['VehicleCategory']['price'] ?></label></div>
                   </div>
                   <div class="formRow">
                  	<label>Created :</label>
    			  	 <div class="formRight"><?php echo $post['VehicleCategory']['created'] ?></div>
                   </div>               
            </div>
            <div class="widget content" style="">
              <div class="body textC">
              <a href="http://localhost/sl_kasir/vehiclecategories/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/vehiclecategories/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
           </div>
</div>