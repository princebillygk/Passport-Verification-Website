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
 ?>
 
<div class='container'>
  <h5>
    Present Address:
  </h5>
  <table class="table">
    <tr>
      <th>Street</th>
      <td><?php echo $presentStreet; ?></td>
    </tr>
    <tr>
      <th>Post Code</th>
      <td><?php echo $presentPost; ?></td>
    </tr>
    <tr>
      <th>Thana</th>
      <td><?php echo $presentThana; ?></td>
    </tr>
    <tr>
      <th>Post Code</th>
      <td><?php echo $presentDistrict; ?></td>
    </tr>
  </table>
</div>

 
<div class='container'>
  <h5>
    Permanent Address:
  </h5>
  <table class="table">
    <tr>
      <th>Street</th>
      <td><?php echo $permanentStreet; ?></td>
    </tr>
    <tr>
      <th>Post Code</th>
      <td><?php echo $permanentPost; ?></td>
    </tr>
    <tr>
      <th>Thana</th>
      <td><?php echo $permanentThana; ?></td>
    </tr>
    <tr>
      <th>Post Code</th>
      <td><?php echo $permanentDistrict; ?></td>
    </tr>
  </table>
</div>