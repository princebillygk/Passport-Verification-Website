<?php 
	session_start();
	include 'config/init.php';
	$db= new Database();
	$applicantId=$_GET['app_id'];
	$do=$_GET['do'];	
	if($do=='preWC'){
		extract($_SESSION['wcloggedin']);
		$db->query("UPDATE `application` SET `ispresentWCverified`=:status, `presentWCverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' =>$Name,
			'a_id' => $applicantId

		]);
	}else if($do=='perWC'){
		extract($_SESSION['wcloggedin']);
		$db->query("UPDATE `application` SET `ispermanentWCverified`=:status, `permanentWCverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' =>$Name,
			'a_id' => $applicantId

		]);
	}else if($do=='SBper'){
		extract($_SESSION['policeloggedin']);
		$db->query("UPDATE `application` SET `isSBpermited`=:status, `SBpermiter`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' =>$Name,
			'a_id' => $applicantId

		]);
	}else if($do=='SBver'){
		extract($_SESSION['policeloggedin']);
		$db->query("UPDATE `application` SET `isSBverified`=:status, `SBverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' =>$Name,
			'a_id' => $applicantId
		]);
		$db->query('UPDATE `passport` SET `publishdateActual`=:col_5,`expiredDate`=:col_6 WHERE `applicationNo`=:app_id');

		$db->execute([
			'col_5' => date('d:m:y'),
			'col_6' => date('d:m:y',strtotime("+6 years")),
			'app_id' => $applicantId
		]);
	}
	header("Location: {$_SERVER['HTTP_REFERER']}");

 ?>