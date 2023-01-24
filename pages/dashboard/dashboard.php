<?php

    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    $results = $db->getAllPatients();
    $states = $db->getAllStates();



    if (isset($_POST['submit'])) {
      // echo "<pre>";
      // print_r($_POST);
      // echo "</pre>";
      $date = $db->sanitize($_POST['date']);
      
      $patient_name = $db->sanitize($_POST['patient_name']);
      $card_number = $db->sanitize($_POST['card_number']);
      $dob = $db->sanitize($_POST['dob']);
      $sex = $db->sanitize($_POST['sex']);
      $age = $db->sanitize($_POST['age']);
      $address = $db->sanitize($_POST['address']);
      $state = $db->sanitize($_POST['state']);
      $phone_number = $db->sanitize($_POST['phone_number']);
      $first_contact = $db->sanitize($_POST['f_c']) ;
      $nok = $db->sanitize($_POST['nok']);
      $nok_relationship = $db->sanitize($_POST['nok_rel']);
      $nok_address = $db->sanitize($_POST['nok_address']);
      $nok_phone = $db->sanitize($_POST['nok_phone']);

      $sql = "INSERT INTO `attendance_register` (`date`, `patient_name`, `card_number`, `date_of_birth`, `sex`, `age`, `contact_address`, `state`, `telephone`, `first_contact`, `nok_name`, `nok_relationship`, `nok_address`, `nok_phone`) VALUES ( '$date', '$patient_name', '$card_number', '$dob', '$sex', '$age', '$address', '$state', '$phone_number', '$first_contact', '$nok', '$nok_relationship', '$nok_address', '$nok_phone')";
      if ($db->conn->query($sql)) {
        header('location: dashboard');
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
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-patient">
            <i class="fas fa-plus"></i> Add Patient
          </button>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Patient Information
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:13px;">
                <thead>
                  <tr class="text-center">
                    <th>S/N</th>
                    <th>Date</th>
                    <th>Patient Name</th>
                    <th>Card No.</th>
                    <th>Date of Birth</th>
                    <th>Sex</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>State of Origin</th>
                    <th>Telephone</th>
                    <th>First Contact</th>
                    <th>Next of Kin</th>
                    <th>(N.O.K) Relationship</th>
                    <th>(N.O.K) Address</th>
                    <th>(N.O.K) Phone</th>
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