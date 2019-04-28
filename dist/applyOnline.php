<?php include 'config/init.php';
        include 'lib/inputProcess.php';

 ?>

<!--====================================================
=            Form Submission and validation            =
=====================================================-->

<?php 
    if(isset($_POST['submit'])){
        $applicaionId=uniqid();
        $applicantName = input_filter($_POST['applicantName']);
        $fatherName = input_filter($_POST['fatherName']);
        $motherName = input_filter($_POST['motherName']);


        $dateOfBirth = input_filter($_POST['dateOfBirth']);
        $DOB=new DateTime($dateOfBirth);
        $currentDate= new DateTime;
        $age= $currentDate->diff($DOB);
        $age= $age->y;
        echo $age;
        if(age<18)
            $ageUnder18= 1;
        else 
            $ageUnder18= 0;


        $nationality = input_filter($_POST['nationality']);
        $isByBirth= boolcheck(input_filter($_POST['isByBirth']));

        $isUrgent = boolcheck(input_filter($_POST['isUrgent']));

        //present Address
        $presentStreet = input_filter($_POST['presentStreet']);
        $presentPost = input_filter($_POST['presentPost']);
        $presentThana = input_filter($_POST['presentThana']);
        $presentDistrict = input_filter($_POST['presentDistrict']);

        //permanent Address
        $permanentStreet = input_filter($_POST['presentStreet']);
        $permanentPost = input_filter($_POST['permanentPost']);
        $permanentThana = input_filter($_POST['permanentThana']);
        $permanentDistrict = input_filter($_POST['permanentDistrict']);

        $religion = input_filter($_POST['religion']);
        $isTribal = boolcheck(input_filter($_POST['isTribal']));

        $db= new Database();
        $db->query("INSERT INTO `application`(`id`, `applicationNo`, `applicantName`, `fatherName`, `motherName`, `nationality`, `isByBirth`, `dateOfBirth`, `ageUnder18`, `isUrgent`, `religion`, `isTribial`, `presentStreet`, `presentPost`, `presentThana`, `presentDistrict`, `permanentStreet`, `permanentPost`, `permanentThana`, `permanentDistrict`, `sbVerifier`, `wcverifier`, `ispersentVerified`, `ispermanentVerified`) VALUES ('',:col_2,:col_3,:col_4,:col_5,:col_6,:col_7,:col_8,:col_9,:col_10,:col_11,:col_12,:col_13,:col_14,:col_15,:col_16,:col_17,:col_18,:col_19,:col_20,'','','','')");
        $db->execute([
            'col_2' => $applicaionId,
            'col_3' => $applicantName ,
            'col_4' => $fatherName ,
            'col_5' => $motherName ,
            'col_6' => $nationality ,
            'col_7' => $isByBirth ,
            'col_8' => $dateOfBirth ,
            'col_9' => $ageUnder18 ,
            'col_10' => $isUrgent ,
            'col_11' => $religion ,
            'col_12' => $isTribal ,
            'col_13' => $presentStreet ,
            'col_14' => $presentPost ,
            'col_15' => $presentThana ,
            'col_16' => $presentDistrict ,
            'col_17' => $permanentStreet ,
            'col_18' => $permanentPost ,
            'col_19' => $permanentThana ,
            'col_20' => $permanentDistrict
        ]);
        header('location: applySuccess.php?app_id='.$applicaionId.'&age='.$age);
        
    }
 ?>

<!--====  End of Form Submission and validation  ====-->


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
  <?php $header->pageTitle='Apply Online';
    echo $header;
  ?>
 <!--====  End of Header  ====-->
 
  <!--======================================
  =            Application Form            =
  =======================================-->

  <section id="apply">
    <div class="container form-container">
        <form  method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <div class="d-sm-flex ">

              <!-- Applicant Name -->
                <div class="form-group required col-8">
                    <label for="applicantName">Applicant Name</label>
                    <input name="applicantName" type="text" class="form-control" id="applicantName" aria-describedby="textHelp" placeholder="Enter your name" required="true">
                    <small id="textHelp" class="form-text text-muted">Please use block letter</small>
                </div>
                
                <!-- delivery Type -->
                <div class="form-group required-radio col-4">
                    <span class='radio-title'>Delivery Type</span>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input required="true" class="form-check-input" type="radio" name="isUrgent" id=true value='true' > 
                            Urgent
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="isUrgent" id="normal" value='false'> 
                            Normal
                        </label>
                    </div>
                </div>

            </div>


            <div class="d-sm-flex">

              <!-- Father's Name -->
                <div class="form-group required col-md-6">
                    <label for="fatherName">Father's name</label>
                    <input  name="fatherName" type="text" class="form-control" id="fatherName" aria-describedby="textHelp" placeholder="Enter your father Name" required="true">
                </div>

                <!-- Mother's Name -->
                <div class="form-group required col-md-6">
                    <label for="motherName">Mother's name</label>
                    <input type="text" class="form-control" name="motherName" id="motherName" aria-describedby="textHelp" placeholder="Enter your mother Name" required="true">
                </div>
            </div>
            

            <!-- Nationality -->
            <?php 
              $db->query('SELECT nationality FROM countries');
              $nationalityList=$db->fetchArrayAll();
            ?>
              
            <div class="d-sm-flex">
                <div class="form-group required col-md-4">
                    <label for="nationality">Nationality</label>
                    <select name="nationality" id="nationality" class="form-control">
                      <?php foreach ($nationalityList as $key => $value): ?>
                        <option value=" <?php echo $value['nationality']; ?>"> <?php echo $value['nationality']; ?></option>
                      <?php endforeach ?>
                    </select> 
                </div>
                
                <div class="form-group required-radio col-md-4">
                    <span class='radio-title'>By</span>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input required="true" class="form-check-input" type="radio" name="isByBirth" id="bybirth" value='true'>
                            by birth
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input required="true" class="form-check-input" type="radio" name="isByBirth" id="notbybirth" value='flase'>
                            other
                        </label>
                    </div>
                </div>

                <div class="form-group required col-md-4">
                    <label for="dateOfBirth">Date of Birth</label>
                    <input required="true" name="dateOfBirth" type="Date" class="form-control" id="dateOfBirth" aria-describedby="textHelp">
                </div>
            </div>

           

          <!-- Present Address -->
          <h6>Present Address</h6>
            <div class="d-sm-flex">
                <div class="form-group required col-md-6">
                    <label for="presentStreet">Street</label>
                    <input name='presentStreet' required="true" type="text" class="form-control" id="persentStreet" aria-describedby="textHelp" placeholder="Enter Street Address">
                </div>

                <div class="form-group required col-md-6">
                    <label for="presentPost">Post Code</label>
                    <input name='presentPost' required="true" type="text" class="form-control" id="presentPost" aria-describedby="textHelp" placeholder="Enter Post Code">
                </div>
              </div>

            
            <div class="d-sm-flex">

                <?php 
                    $db->query('SELECT name FROM district');
                    $districts=$db->fetchArrayAll();
                ?>
                <div class="form-group required col-md-6">
                    <label for="presentDistrict">District</label>
                    <select name='presentDistrict' id="presentDistrict" class="form-control">
                        <?php foreach ($districts as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <?php 
                    $db->query('SELECT name FROM thana');
                    $thanas=$db->fetchArrayAll();
                ?>
                <div class="form-group required col-md-6">
                    <label for="presentThana">Thana</label>
                    <select name='presentThana' id="presentThana" class="form-control">
                        <?php foreach ($thanas as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

    
            <!-- permanent Address -->
          <h6>Permanent Address</h6>
            <div class="d-sm-flex">
                <div class="form-group required col-md-6">
                    <label for="presentStreet">Street</label>
                    <input name='presentStreet' required="true" type="text" class="form-control" id="persentStreet" aria-describedby="textHelp" placeholder="Enter Street Address">
                </div>

                <div class="form-group required col-md-6">
                    <label for="permanentPost">Post Code</label>
                    <input name='permanentPost' required="true" type="text" class="form-control" id="permanentPost" aria-describedby="textHelp" placeholder="Enter Post Code">
                </div>
              </div>

            
            <div class="d-sm-flex">

                <?php 
                    $db->query('SELECT name FROM district');
                    $districts=$db->fetchArrayAll();
                ?>
                <div class="form-group required col-md-6">
                    <label for="permanentDistrict">District</label>
                    <select name='permanentDistrict' id="permanentDistrict" class="form-control">
                        <?php foreach ($districts as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <?php 
                    $db->query('SELECT name FROM thana');
                    $thanas=$db->fetchArrayAll();
                ?>
                <div class="form-group required col-md-6">
                    <label for="permanentThana">Thana</label>
                    <select name='permanentThana' id="permanentThana" class="form-control">
                        <?php foreach ($thanas as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>



            <!-- Religion -->
            <?php 
                $db->query('SELECT religion FROM religions');
                $religions=$db->fetchArrayAll();
                //var_dump($religions);
             ?>
            <div class="d-sm-flex">
                <div class="form-group required col-8">
                    <label for="religion">Religion</label>
                    <select name='religion' id="nationality" class="form-control">
                      <?php foreach ($religions as $key => $value): ?>
                        <option value="<?php echo $value['religion']; ?>"><?php echo $value['religion']; ?></option>
                      <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group required-radio col-4">
                    <span class="radio-title">Tribal</span>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input required="true" class="form-check-input" type="radio" name="isTribal" id="tribal" value='true'>
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input required="true" class="form-check-input" type="radio" name="isTribal" id="nontribal" value='false'>
                            No
                        </label>
                    </div>
                </div>

            </div>
            
            <!-- Photo Upload -->
            <div class="d-sm-flex">
                <div class="form-group required col-6">
                    <label for="photo">Upload Photo</label>
                    <input name="photo" required="true" type="file" class="form-control-file" id="photo">
                </div>

                <!-- NID or birth upload -->
                <div class="form-group col-6 required">
                    <label for="nidorbirth">Upload NID Card or Birth</label>
                    <input name="nidOrBirth" required="true" type="file" class="form-control-file" id="nidorbirth">
                </div>
            </div>

            <div class="container d-sm-flex justify-content-between">
                <input name="submit" value="submit" type="submit" class="col-8 btn btn-dark w-100 mt-3">
                <input type="reset" class="btn btn-dark w-100 mt-3 col-3">
            </div>

        </form>
    </div>
</section>
  
  
  <!--====  End of Application Form  ====-->
  

  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->