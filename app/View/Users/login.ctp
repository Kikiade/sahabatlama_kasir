<html>
<head><title>Login Sahabat Lama Kasir</title>
</head>

<body bgcolor="#CCCC66">
	<?php
    	echo $this->Form->create('user', array('action'=>'login'));
    	echo $this->Form->input('username');
    	echo $this->Form->input('password');
    	echo $this->Form->end('login');
	?>
</body>
</html>