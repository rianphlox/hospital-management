<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    // $results = $db->getLaborPatients();
    $results = $db->conn->query("SELECT * FROM `out_patient_dept`");

    if (isset($_POST['submit'])) {
      // unset($_POST['id']);
      // echo "<pre>";
      // print_r($_POST);
      // echo "</pre>";
      // echo count($_POST) - 1;
      $date = $_POST['date'];
      $patient_name = $_POST['patient_name'];
      $card_number = $_POST['card_number'];
      $sex = $_POST['sex'];
      $age_grade = $_POST['age_grade'];
      $age = $_POST['age'];
      $attendance_type = $_POST['attendance_type'];
      $weight = $_POST['weight'];
      $height = $_POST['height'];
      $bmi = $_POST['bmi'];
      $presenting_complaints =  $_POST['presenting_complaints'];
      $lab_inv_done = $_POST['lab_inv_done'];
      $diagnosis = $_POST['diagnosis'];
      $drugs_given = $_POST['drugs_given'];
      $outcome_of_visits = $_POST['outcome_of_visits'];
      $clinical_diagnosis = $_POST['clinical_diagnosis'];
      $rdt = $_POST['rdt'];
      $microscopy = $_POST['microscopy'];
      $act_given = $_POST['act_given'];
      $severe_malaria = $_POST['severe_malaria'];
      $pre_referral_treatment = $_POST['pre_referral_treatment'];
      $tubeculosis = $_POST['tubeculosis'];
      $hepatitis_b = $_POST['hepatitis_b'];
      $hepatitis_c = $_POST['hepatitis_c'];
      $gender_violence = $_POST['gender_violence'];


      $sql = "INSERT INTO `out_patient_dept` (`date`, `patient_name`, `card_number`, `sex`, `age_grade`, `age`, `attendance_type`, `weight`, `height`, `bmi`, `presenting_complaints`, `lab_inv_done`, `diagnosis`, `drugs_given`, `outcome_of_visits`, `clinical_diagnosis`, `rdt`, `microscopy`, `act_given`, `severe_malaria`, `pre_referral_treatment`, `tubeculosis`, `hepatitis_b`, `hepatitis_c`, `gender_violence`) VALUES ( '$date', '$patient_name', '$card_number', '$sex', '$age_grade', '$age', '$attendance_type', '$weight', '$height', '$bmi', '$presenting_complaints', '$lab_inv_done', '$diagnosis', '$drugs_given', '$outcome_of_visits', '$clinical_diagnosis', '$rdt', '$microscopy', '$act_given', '$severe_malaria', '$pre_referral_treatment', '$tubeculosis', '$hepatitis_b', '$hepatitis_c', '$gender_violence');";
      if ($db->conn->query($sql)) {
        header('location: opd?success=true');
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
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-opd">
            <i class="fas fa-plus"></i> Add OPD Patient
          </button>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Patient Information
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
                <?php if ($results->num_rows) : ?>
                    <?php foreach ($results->fetch_all(MYSQLI_ASSOC) as $result => $val) : ?>
                      
                      <tr>
                        <?php foreach ($val as $k => $v): ?>
                          <td><?= ucwords($v) ?></td>
                        <?php endforeach; ?>
                        <td>
                          <a href="edit-patient?id=<?= $val['id'] ?>" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-patient" style="font-size:13px;">
                              <i class="fas fa-pen"></i>
                            </button>
                          </a>
                        </td>
                      </tr>

                    <?php endforeach; ?>
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