<div class="line"></div>

<!-- Main Content Wrapper -->
<div class="wrapper">
   <br />
    <h1>View</h1>
      
      <!-- Larger buttons -->
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
                <a href="http://localhost/sl_kasir/vehiclecategories/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
                <a href="http://localhost/sl_kasir/vehiclecategories/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
              </div>
           </div>
</div>