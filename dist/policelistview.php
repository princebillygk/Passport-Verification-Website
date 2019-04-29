<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
  ?>

  <?php 
      $db= new Database()
   ?>

<!--====  End of contents intialization  ====-->


 <!--============================
 =            Header            =
 =============================-->
  <?php  echo $header;?>
 <!--====  End of Header  ====-->

 <!--======================================
 =            Police list view            =
 =======================================-->
 <br><br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item w-50">
    <a class="nav-link active" id="new-application-tab" data-toggle="tab" href="#new_applications" role="tab" aria-controls="new_applications" aria-selected="true"><small>New Applications</small></a>
  </li>
  <li class="nav-item w-50">
    <a class="nav-link" id="wc-verified-tab" data-toggle="tab" href="#wc-verified" role="tab" aria-controls="wc-verified" aria-selected="false"><small>WC Verified Application</small></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="new_applications" role="tabpanel" aria-labelledby="new-application-tab">...</div>
  <div class="tab-pane fade" id="wc-verified" role="tabpanel" aria-labelledby="wc-verified-tab">...</div>
</div>
 
 
 <!--====  End of Police list view  ====-->
 
 

  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
