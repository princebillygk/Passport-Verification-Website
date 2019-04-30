<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
    $genaralInfo= new Templete('applicant\genaralInfo');
    $nidBirth= new Templete('applicant\nidBirth');
    $address= new Templete('applicant\address');
  ?>


  <?php
  /*===================================================
  =            fetching Data from database            =
  ===================================================*/
  //getting id
  $applicantId=$_GET['app_id'];
  $db= new Database();
  $db->query('SELECT `isSBpermited`,`ispermanentSBsent`, `ispresentWCverified`, `ispermanentWCverified`, `isSBpermited`, `isSBverified` FROM `application` WHERE `applicationNo`=?');
  $db->execute([$applicantId]);
  $applicant=$db->fetchArray();
  extract($applicant);  
 ?>

<!--====  End of contents intialization  ====-->

 <!--============================
 =            Header            =
 =============================-->
  <?php  
    $header->pageTitle='Police view/Applicant Information';
    echo $header;
  ?>
  
 <!--====  End of header  ====-->  

  <?php  
    $genaralInfo->appID=$_GET['app_id'];
   echo $genaralInfo;
  ?>
  <br>
  <?php  
    $address->appID=$_GET['app_id'];
   echo $address;
  ?>

  <?php  
    $nidBirth->appID=$_GET['app_id'];
   echo $nidBirth;
  ?>
  <div class="d-sm-flex">
    <?php if ($isSBpermited==0): ?>
      <a href='_verification.php?do=SBper&app_id=<?php echo $applicantId ?>' class="btn btn-dark w-100 m-4 text-light">Permit</a>
    <?php endif ?>
  </div>

  <div class="d-sm-flex">
    <?php if (($ispresentWCverified==0 OR $ispermanentWCverified==0) && $isSBpermited==1): ?>
      <a href='' class="btn btn-dark w-100 m-4 text-light disabled">waiting for Ward Commisioner Verification</a>
    <?php endif ?>
  </div>

  <div class="d-sm-flex">
    <?php if ($ispresentWCverified==1 && $ispermanentWCverified==1 && $isSBpermited==1 && $isSBverified==0): ?>
      <a href='_verification.php?do=SBver&app_id=<?php echo $applicantId ?>' class="btn btn-dark w-100 m-4 text-light">Publish</a>
    <?php endif ?>
  </div>
  
  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
