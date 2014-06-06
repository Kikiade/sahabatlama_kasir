<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->

<?php
//link CSS
echo $this->Html->css('main');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
	
<div id="leftSide">
    <div class="logo"><a><img src="<?php echo $this->webroot ?>img/logo_.png" alt="" width="100" /></a></div>
    <div class="sidebarSep mt0"></div>
</div>
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo $this->webroot ?>img/userPic.png" alt="" /></a><span></span></div>
            <div class="userNav">
                <ul>
                    <li><a href=""><img src="<?php echo $this->webroot ?>img/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="resp">
        <div class="respHead">
            <a href="<?php echo $settings["cms_url"]?>" title=""><img src="<?php echo $this->webroot ?>img/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo $this->webroot ?>img/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div id="header">
    <li><a href="<?php echo $this->webroot ?>Home" title=""><img src="<?php echo $this->webroot ?>img/icons/light/home.png" alt="" />Dashboard</a></li>
    <li><a href="#" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />User</a></li>
    <li><a href="#" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />Staff</a></li>
    <li><a href="#" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />Customer</a></li>
    <li><a href="#" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />Vehicle</a>
        <ul>
		<li><?php echo $this->Html->link("Vehicle Category", array("controller" => 'VehicleCategories', 'action' => 'Index')); ?></li>
                <li class="last"><?php echo $this->Html->link("Vehicle Category Costs", array("controller" => 'VehicleCategoryCosts', 'action' => 'index')); ?></li>
	</ul>
   </li>
    <li><a href="#" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />Sales Log</a></li>
</div>
</div>
</div>
</div>

<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<div id="footer"><a href="http://www.coda-technology.com" title="http://www.coda-technology.com">Coda Technology</a> </div>

</body>
</html>