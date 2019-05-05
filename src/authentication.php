<?php
	include 'config/init.php';
	include 'lib/inputProcess.php'; 
	$uid= input_filter($_POST['userid']);
	$pwd= input_filter($_POST['password']);
	$user=$_GET['user'];


	if($user=='police'){
		$db= new Database;
		$db->query('SELECT * FROM `sbverifier` WHERE `userid`=? AND `password`=?');
		$user=$db->fetchArray([$uid,$pwd]);
		if(empty($user)){
			session_start();
			$_SESSION['loginerror']='SB username or password is not correct';
			header("Location: {$_SERVER['HTTP_REFERER']}");
		}else{
			session_start();
			$_SESSION['policeloggedin']=$user;
			header('location: policelistview.php');
		}
	}else{
		$db= new Database;
		$db->query('SELECT * FROM `wcverifier` WHERE `userid`=? AND `password`=?');
		//$user=$db->fetchArray(['w123','123wc']);
		$user=$db->fetchArray([$uid,$pwd]);
		if(empty($user)){
			session_start();
			$_SESSION['loginerror']='WC username or password is not correct';
			header("Location: {$_SERVER['HTTP_REFERER']}");
		}else{
			session_start();
			$_SESSION['wcloggedin']=$user;
			header('location: wclistview.php');
		}
	}
	
 ?>
 