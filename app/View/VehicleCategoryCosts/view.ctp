<div class="line"></div>

<!-- Main Content Wrapper -->
<div class="wrapper">
   <br />
	<h1>View</h1>
    	
        <!-- View -->
            <div class="widget">
                <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/preview.png" alt="" class="titleIcon" />
                <h6>View Category Cost</h6></div>
                <div class="formRow">
                  <label>Name :</label>
                  <div class="formRight"><label><?php echo $post['VehicleCategoryCost']['name']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>Cost :</label>
                  <div class="formRight"><label><?php echo $post['VehicleCategoryCost']['cost']; ?></label></div>
                </div>
                <div class="formRow">
                  <label>Created :</label>
                  <div class="formRight"><label><?php echo $post['VehicleCategoryCost']['created']; ?></label></div>
                </div>
            </div>
            <div class="widget content" style="">
              <div class="body textC">
                <a href="http://localhost/sl_kasir/vehcilecategorycost/add" title="" class="wButton greenwB ml15 m10" style="margin:5px"><span>Add More</span></a>
                <a href="http://localhost/sl_kasir/vehiclecategorycost/index" title="" class="wButton bluewB ml15 m10" style="margin:5px"><span>Back To List</span></a>
              </div>
            </div>
</div>