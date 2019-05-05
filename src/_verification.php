<?php 
	include 'config/init.php';
	$db= new Database();
	$applicantId=$_GET['app_id'];
	$user='wc';
	$do=$_GET['do'];	
	if($do=='preWC'){
		$db->query("UPDATE `application` SET `ispresentWCverified`=:status, `presentWCverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' => $user,
			'a_id' => $applicantId

		]);
	}else if($do=='perWC'){
		$db->query("UPDATE `application` SET `ispermanentWCverified`=:status, `permanentWCverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' => $user,
			'a_id' => $applicantId

		]);
	}else if($do=='SBper'){
		$db->query("UPDATE `application` SET `isSBpermited`=:status, `SBpermiter`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' => $user,
			'a_id' => $applicantId

		]);
	}else if($do=='SBver'){
		$db->query("UPDATE `application` SET `isSBverified`=:status, `SBverifier`=:user WHERE `applicationNo`=:a_id");
		$db->execute([
			'status' => 1,
			'user' => $user,
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