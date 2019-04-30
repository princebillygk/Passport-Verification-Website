<?php include 'config/init.php' ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
  ?>

  <?php 
      $db= new Database();
      $db->query('SELECT `id`, `applicationNo`, `applicantName` FROM `application` WHERE `isSBpermited`=0');
      $new=$db->fetchAll();

      $db->query('SELECT `id`, `applicationNo`, `applicantName` FROM `application` WHERE `ispresentWCverified`=1 AND `ispermanentWCverified`=1');
      $wc=$db->fetchAll();

      $db->query('SELECT `id`, `applicationNo`, `applicantName` FROM `application`');
      $all=$db->fetchAll([]);

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
 <div class="container mb-5">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item w-25">
    <a class="nav-link active" id="new-application-tab" data-toggle="tab" href="#new_applications" role="tab" aria-controls="new_applications" aria-selected="true"><small>New</small></a>
  </li>
  <li class="nav-item w-25">
    <a class="nav-link" id="wc-verified-tab" data-toggle="tab" href="#wc-verified" role="tab" aria-controls="wc-verified" aria-selected="false"><small>WC Verified</small></a>
  </li>
  <li class="nav-item w-50">
    <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false"><small>All</small></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="new_applications" role="tabpanel" aria-labelledby="new-application-tab">
    <table class="table">
    <thead>
        <th>ID</th>
        <th>Applicant Name</th>
        <th>Applicant track ID</th>
      </thead>
      <?php foreach ($new as $key => $applicant): ?>
        <tr>
        <td><?php echo $applicant->id ?></td>
        <td><a href="policeApplicantview.php?app_id=<?php echo $applicant->applicationNo?>"><?php echo $applicant->applicantName ?></a></td>
        <td><?php echo $applicant->applicationNo ?></td>
      </tr>
      <?php endforeach ?>
    </table>
   </div>

  <div class="tab-pane fade" id="wc-verified" role="tabpanel" aria-labelledby="wc-verified-tab">
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Applicant Name</th>
        <th>Applicant track ID</th>
      </thead>
      <?php foreach ($wc as $key => $applicant): ?>
        <tr>
        <td><?php echo $applicant->id ?></td>
        <td><a href="policeApplicantview.php?app_id=<?php echo $applicant->applicationNo?>"><?php echo $applicant->applicantName ?></a></td>
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
        <td><a href="policeApplicantview.php?app_id=<?php echo $applicant->applicationNo?>"><?php echo $applicant->applicantName ?></a></td>
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
  
