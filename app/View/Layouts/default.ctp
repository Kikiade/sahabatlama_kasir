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

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div id="header">
    <li><a href="<?php echo $this->webroot ?>Home" title=""><img src="<?php echo $this->webroot ?>img/icons/light/home.png" alt="" />Dashboard</a></li>
    <li><a href="f" title="" class="exp"><img src="<?php echo $this->webroot ?>img/icons/light/pencil.png" alt="" />User</a></li>
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

<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<div id="footer"><a href="http://www.coda-technology.com" title="http://www.coda-technology.com">Coda Technology</a> </div>

</body>
</html>