<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
    $db=new Database();
  ?>

<!--====  End of contents intialization  ====-->



 <!--============================
 =            Header            =
 =============================-->
  <?php $header->pageTitle='Congratulation';
    echo $header;
  ?>
 <!--====  End of Header  ====-->
 


  

  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->