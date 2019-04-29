<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
    $genaralInfo= new Templete('applicant\genaralInfo');
 
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
  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
