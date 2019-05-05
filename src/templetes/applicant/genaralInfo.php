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
  $db->query('SELECT * FROM `passport` WHERE `applicationNo`=?');
  $applicant=$db->fetchArray([$applicantId]);
  extract($applicant);

  /*=====  End of fetching Data from database  ======*/
 
  /*=========================================
  =            Generating Status            =
  =========================================*/
  
  if($isSBpermited==1 && $ispresentWCverified==1  && $ispermanentWCverified==1 && $isSBverified==1){
      $status= 'Your Passport is already published.';
  }else if($isSBpermited==1 && $ispresentWCverified==1  && $ispermanentWCverified==1){
      $status= 'Waiting for Police Verification.';
  }else if($isSBpermited==1){
      $status='Wating for Ward Commisioner Verification.';
  }else{
    $status='Wating for Police permit';
  }
  /*=====  End of Generating Status  ======*/ 
  
 ?>
 
  <div class="container">
  <h3 class='pt-4 '><?php echo $applicantName ?></h3>
  <h5>Personal Information: </h5>    
    <div class="d-sm-flex">
      <div class=" text-center col-sm-6">
        <h6 class='text-center'>Image</h6>
        <img class='pt-3 m-auto' style='max-width: 300px' width="100%" src="appdata/applicant/photo/<?php echo $applicationNo.'.jpg' ?>" alt="">
        <a href="appdata/applicant/photo/<?php echo $applicationNo.'.jpg' ?>" class="btn btn-success mt-2 w-100" download><i class="fas fa-download"></i> Download photo</a>
        <div class="mt-1 mb-2 rounded bg-light">
          <i class='fas fa-eye'></i>
          <?php echo $status; ?>
        </div>
      </div>
      <div class="col-sm-6">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Personal Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class='table'>
              <tr>
                <td><b>Father Name</b></td>
                <td>: <?php echo $fatherName ?></td>
              </tr>
              <tr>
                <td><b>Mother Name</b></td>
                <td>: <?php echo $motherName ?></td>
              </tr>
              <tr>
                <td><b>Nationality</b></td>
                <td>: <?php echo $nationality ?></td>
              </tr>
              <tr>
                <td><b>Nationality Factor</b></td>
                <td>: <?php echo $isByBirth?'Yes':'No' ?></td>
              </tr>
              <tr>
                <td><b>Date Of Birth</b></td>
                <td>: <?php echo $dateOfBirth ?></td>
              </tr>
              <tr>
                <td><b>Religion</b></td>
                <td>: <?php echo $religion ?></td>
              </tr>
              <tr>
                <td><b>Tribality</b></td>
                <td>: <?php echo $isTribial?'Yes':'No' ?></td>
              </tr>
            </table>            
          </div>
          <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
            <table class='table small'>
              <tr class="bg-light">
                <th>Application Date</th>
                <td><?php echo $applicationDate ?></td>
              </tr>
              <tr class="bg-light">
                <th>Delivery Date (*)</th>
                <td><?php echo $publishdateEstimated ?></td>
              </tr>
              <?php if (isset($publishdateActual)): ?>
              <tr class="bg-light">
                <th>Published Date (*)</th>
                <td><?php echo $publishdateActual ?></td>
              </tr>
              <tr class="bg-light">
                <th>Expired Date (*)</th>
                <td><?php echo $expiredDate ?></td>
              </tr>
            <?php endif ?>
            <?php if (isset($SBpermiter)): ?>
              <tr>
                <th>Permited By(*)</th>
                <td>SB. <?php echo $SBpermiter   ?></td>
              </tr>
            <?php endif ?>
            <?php if (isset($SBverifier)): ?>
              <tr>
                <th>Permited By(*)</th>
                <td>SB. <?php echo $SBverifier   ?></td>
              </tr>
            <?php endif ?>
            <?php if (isset($presentWCverifier)): ?>
              <tr>
                <th>Pre.Adr Ver. By(*)</th>
                <td>WC. <?php echo $presentWCverifier   ?></td>
              </tr>
            <?php endif ?>
            <?php if (isset($permanentWCverifier)): ?>
              <tr>
                <th>Per.Adr Ver. By(*)</th>
                <td>WC. <?php echo $permanentWCverifier   ?></td>
              </tr>
            <?php endif ?>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
