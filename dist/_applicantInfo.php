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

<!--====  End of contents intialization  ====-->

 <!--============================
 =            Header            =
 =============================-->
  <?php  
    $header->pageTitle='Aplicant Information';
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

  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
