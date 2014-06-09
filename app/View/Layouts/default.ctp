<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/main.css">
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
<!-- Left Content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="<?php echo $this->webroot; ?>img/logo.png" alt="" /></a></div>
    
    <div class="sidebarSep"></div>
        
<!-- Left navigation -->
   <ul id="menu" class="nav">
        <li class="dash"><a href="#" title="" class="active"><span>Dashboard</span></a></li>
        <li class="charts"><a href="#" title=""><span>Vehicle</span></a></li>
        <li class="ui"><a href="#" title="" class="exp"><span>Customers</span></a></li>
        <li class="ui"><a href="#" title="" class="exp"><span>Admin</span><strong>3</strong></a>
            <ul class="sub">
                <li><a href="#" title="">Add new Admin</a></li>
                <li><a href="#" title="">List</a></li>
                <li><a href="#" title="">Report</a></li>
            </ul>
        </li>
        <li class="ui"><a href="#" title=""><span>Venue</span></a></li>
    </ul>
</div>

<!-- Right side -->
<div id="rightSide">

<!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Howdy, Putra!</span></div>
            <div class="userNav">
                <ul>
                    <li class="dd"><a title=""><img src="images/icons/topnav/messages.png" alt=""/><span>Messages</span><span class="numberTop">8		                     </span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Dashboard</h5>
                <span>Sahabat lama cuci management system</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <?php echo $this->fetch('content'); ?>
    
    <!-- Add a footer to each displayed page -->
  <div id="footer"><div class="wrapper"><a href="http://www.coda-technology.com" title="http://www.coda-technology.com">Coda Technology</a></div>
	</div>
    
</div>

<!-- Responsive header -->
 <!--   <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo $this->webroot; ?>images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo $this->webroot; ?>images/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="images/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="images/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="images/icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="images/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="images/icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div> -->

<!-- Here's where I want my views to be displayed -->



</body>
</html>