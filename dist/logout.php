<?php 
	session_start();
	if(isset($_SESSION))
		unset($_SESSION);
	session_destroy();
	header("Location: {$_SERVER['HTTP_REFERER']}");
 ?>