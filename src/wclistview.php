<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
  ?>

  <?php 
      $postcode=$_GET['postcode'];
      $db= new Database();
      $db->query('SELECT `id`, `applicationNo`, `applicantName` FROM `application` WHERE `isSBpermited`=1 AND (`ispresentWCverified`=0 OR `ispermanentWCverified`=0) AND (`permanentPost`=? OR `presentPost`=?)');
      $wctask=$db->fetchAll([$postcode,$postcode]);

      $db->query('SELECT `id`, `applicationNo`, `applicantName` FROM `application`');
      $all=$db->fetchAll([]);
   ?>

<!--====  End of contents intialization  ====-->


 <!--============================
 =            Header            =
 =============================-->
  <?php $header->pageTitle='WC View';
  echo $header;?>
 <!--====  End of Header  ====-->

 <!--======================================
 =            Police list view            =
 =======================================-->
 <br><br>
 <div class="container">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item w-50">
    <a class="nav-link active" id="permited-tab" data-toggle="tab" href="#permited" role="tab" aria-controls="permited" aria-selected="true"><small>Permited</small></a>
  </li>
  <li class="nav-item w-50">
    <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false"><small>All</small></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="permited" role="tabpanel" aria-labelledby="permited-tab">
    <table class="table">
    <thead>
        <th>ID</th>
        <th>Applicant Name</th>
        <th>Applicant track ID</th>
      </thead>
      <?php foreach ($wctask as $key => $applicant): ?>
        <tr>
        <td><?php echo $applicant->id ?></td>
        <td><a href="wcApplicationview.php?app_id=<?php echo $applicant->applicationNo?>&postcode=<?php echo $postcode ?>"><?php echo $applicant->applicantName ?></a></td>
        <td><?php echo $applicant->applicationNo ?></td>
      </tr>
      <?php endforeach ?>
    </table>
   </div>

  <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
    <table class="table">
    <thead>
        <th>ID</th>
        <th>Applicant Name</th>
        <th>Applicant track ID</th>
      </thead>
      <?php foreach ($all as $key => $applicant): ?>
        <tr>
        <td><?php echo $applicant->id ?></td>
        <td><a href="wcApplicationview.php?app_id=<?php echo $applicant->applicationNo?>&postcode=<?php echo $postcode ?>"><?php echo $applicant->applicantName ?></a></td>
        <td><?php echo $applicant->applicationNo ?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>
 </div>
 <!--====  End of Police list view  ====-->
 
 

  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
