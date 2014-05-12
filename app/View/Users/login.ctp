<<<<<<< HEAD
<?php
    echo "oi kayyy.. ini kop";
    echo $this->Form->create('user', array('action'=>'login'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end('login');
    echo "pral ini kikayyyyy";
?>
=======
<html>
<head><title>Login Sahabat Lama Kasir</title>
</head>

<body bgcolor="#CCCC66">
<fieldset>
	<?php
    	echo $this->Form->create('user', array('action'=>'login'));
    	echo $this->Form->input('username');
    	echo $this->Form->input('password');
    	echo $this->Form->end('login');
	?>
 </fieldset>
</body>
</html>
>>>>>>> f2489258e6910e9d9ed77a59450437a8f4f1e20a
