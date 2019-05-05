<?php include 'config/init.php' ?>



<?php 
  include 'lib/inputProcess.php';
  if(isset($_POST['app_id'])){ 
    $app_id= input_filter($_POST['app_id']);
    $db= new Database;
    $db->query("SELECT * FROM `application` WHERE `applicationNo`= ? ");
    $ap=$db->fetchArray([$app_id]);
    if(empty($ap)){
      session_start();
      $_SESSION['loginerror']='Incorrect Application ID';
      header('location: index.php');exit;
    }
  }else{
    header('location: index.php');exit;
  }

 ?>

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
    $genaralInfo->appID=$_POST['app_id'];
   echo $genaralInfo;
  ?>
  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
