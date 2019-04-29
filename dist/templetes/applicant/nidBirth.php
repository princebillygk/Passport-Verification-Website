 <?php
  /*===================================================
  =            fetching Data from database            =
  ===================================================*/
  //getting id
  $applicantId=$appID;
  $db= new Database();
  $db->query('SELECT * FROM `application` WHERE `applicationNo`=?');
  $db->execute([$applicantId]);
  $applicant=$db->fetchArray();
  extract($applicant);  
 ?>
 
<div class='container'>
  <h5 class='mt-5'>NID/Birth Certificate: </h5>
  <embed class="mb-4" src="appdata/applicant/NidorBirth/<?php echo $applicationNo.'.pdf' ?>" width=100% height="375" 
  type="application/pdf">
</div>