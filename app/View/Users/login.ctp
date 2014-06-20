<!-- Main content wrapper >
<div class="loginWrapper">
    <!div class="loginLogo"><img src="images/loginLogo.png" alt="" /></div>
    <div class="widget">
      <div class="title"><img src="<?php echo $this->webroot; ?>img/icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
    	<form action="index.html" id="validate" class="form">
            <fieldset>
				<?php
                    /*echo $this->Form->input('username', array(
                        'label'	=> 'Username',
                        'div'	=> 'formRow',
                        'between'	=> '<div class="loginInput">',
                        'after'	=> '</div>',
                        'placeholder' => 'usename'
                    ));
                    echo $this->Form->input('password', array(
                        'label'	=> 'Username',
                        'div'	=> 'formRow',
                        'between'	=> '<div class="loginInput">',
                        'after'	=> '</div>',
                        'placeholder' => 'usename'
                    ));
                    echo $this->Form->end('login', array(
					));*/
                ?>
            </fieldset>
        </form>
    </div>
</div-->
<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Staff</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/Staffs/add" title="Add"><span class="users"></span></a>
                <ul class="mSub1">
                </ul>
               </li>
             </ul>
           </div>
   </div>
 </div>
<div class="line"></div>
<div class="wrapper">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<div class="widget">
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
              echo $this->Form->input('password');
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
</div>
