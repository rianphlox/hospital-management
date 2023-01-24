<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    
    
    $e_id = $db->conn->real_escape_string($_GET['id']);
    // $e_id = $db->conn->escape_string($_GET['id']);
    // echo $e_id;
    // if (!$e_id) {
    //   header('location: opd');
    // }
    // !$e_id && header('location: opd?error=1');
    $result = $db->getOpdPatient($e_id)->fetch_assoc();

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $date = $_POST['date'];
        $patient_name = $_POST['patient_name'];
        $card_number = $_POST['card_number'];
        $sex = $_POST['sex'];
        $age_grade = $_POST['age_grade'];
        $age = $_POST['age'];
        $attendance_type = $_POST['attendance_type'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi = trim($_POST['bmi']);
        $presenting_complaints = htmlentities( trim($_POST['presenting_complaints']) );
        $lab_inv_done = $_POST['lab_inv_done'];
        $diagnosis = $_POST['diagnosis'];
        $drugs_given = $_POST['drugs_given'];
        $outcome_of_visits = $_POST['outcome_of_visits'];
        $clinical_diagnosis = htmlentities($_POST['clinical_diagnosis']);
        $rdt = htmlentities($_POST['rdt']);
        $microscopy = htmlentities($_POST['microscopy']);
        $act_given = htmlentities($_POST['act_given']);
        $severe_malaria = htmlentities($_POST['severe_malaria']);
        $pre_referral_treatment = $_POST['pre_referral_treatment'];
        $tubeculosis = $db->conn->real_escape_string($_POST['tubeculosis']);
        $hepatitis_b = $db->conn->real_escape_string($_POST['hepatitis_b']);
        $hepatitis_c = $db->conn->real_escape_string($_POST['hepatitis_c']);
        $gender_violence = $db->conn->real_escape_string($_POST['gender_violence']);

        
        try {
          $sql  = "UPDATE `out_patient_dept` SET `date` = '$date', `patient_name` = '$patient_name', `card_number` = '$card_number', `sex` = '$sex', `age_grade` = '$age_grade', `age` = '$age', `attendance_type` = '$attendance_type', `weight` = '$weight', `height` = '$height', `bmi` = '3', `presenting_complaints` = 'Nones', `lab_inv_done` = '$lab_inv_done', `diagnosis` = '$diagnosis', `drugs_given` = '$drugs_given', `outcome_of_visits` = '$outcome_of_visits', `clinical_diagnosis` = '$clinical_diagnosis', `microscopy` = '$microscopy', `act_given` = '$act_given', `severe_malaria` = '$severe_malaria', `pre_referral_treatment` = '$pre_referral_treatment', `tubeculosis` = '$tubeculosis', `hepatitis_b` = '$hepatitis_b', `hepatitis_c` = '$hepatitis_c', `gender_violence` = '$gender_violence' WHERE `out_patient_dept`.`id` = $id" ;
  
          
          
          
          if ($db->conn->query($sql)) {
            header("location: edit-opd?id=". $id. '&success=true');
          }
          
        } catch (mysqli_sql_exception $e) {
          echo "<pre>";
          print_r($e);
          echo "</pre>";
          exit;

        }
        
        

        
    }


?>
<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body id="page-top">

  <?php include '../navbar.php'; ?>

  <div id="wrapper">

    <?php include '../sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-opd">
            <i class="fas fa-plus"></i> Edit OPD Patient
          </button>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Edit OPD Patient
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:13px;">
                <thead>
                  <tr class="text-center">
                  <th>S/N</th>
                    <th>Date</th>
                    <th>Patient Name</th>
                    <th>Card No.</th>
                    <th>Sex</th>
                    <th>Age Grade</th>
                    <th>Age</th>
                    <th>Attendance Type</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>BMI</th>
                    <th>Presenting Complaints</th>
                    <th>Lab Inv. Done</th>
                    <th>Diagnosis</th>
                    <th>Drugs given</th>
                    <th>Outcome of Visit</th>
                    <th>Clinical Diagnosis</th>
                    <th>RDT</th>
                    <th>Microscopy</th>
                    <th>A.C.T Given</th>
                    <th>Severe Malaria</th>
                    <th>Pre-Refferal Treatment</th>
                    <th>Tuberculosis</th>
                    <th>Hepatitis B</th>
                    <th>Hepatitis C</th>
                    <th>Gender Violence</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php if ($result) : ?>
                  <?php extract($result); ?>
                    <tr>
                        <?php foreach ($result as $key => $val) : ?>
                            <td><?= $val ?></td>
                        <?php endforeach; ?>                        
                        <td>
                          <a href="javascript:void(0)" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="" style="font-size:13px;">
                              <i class="fas fa-pen"></i>
                            </button>
                          </a>
                      </td>
                    </tr>
                      
                    <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php include '../footer.php' ?>
      <?php include '../modals.php' ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <?php include '../scripts.php' ?>
  

</body>

</html>