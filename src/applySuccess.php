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
 
 <div class="rounded m-5 jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><i class="text-success fas fa-check"></i> You are done</h1>
    <p class="lead"> You can now check your passport status at any time using this <b class="text-primary h6">track id: <?php echo htmlspecialchars($_GET['app_id']) ?></b>. Please keep it for further use.</p>
  </div>
</div>
  

  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->