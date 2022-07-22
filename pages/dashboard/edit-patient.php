<?php

    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();

    $e_id = $db->conn->real_escape_string($_GET['id']);
    $result = $db->getPatient($e_id)->fetch_assoc();
    $states = $db->getAllStates();

    if (isset($_POST['edit'])) {
      $update_id = $_POST['update_id'];
      $date = $_POST['date'];
      
      $patient_name = $_POST['patient_name'];
      $card_number = $_POST['card_number'];
      $dob = $_POST['dob'];
      $sex = $_POST['sex'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      $state = $_POST['state'];
      $phone_number = $_POST['phone_number'];
      $first_contact = $_POST['f_c'];
      $nok = $_POST['nok'];
      $nok_relationship = $_POST['nok_rel'];
      $nok_address = $_POST['nok_address'];
      $nok_phone = $_POST['nok_phone'];

      $sql = "UPDATE `attendance_register` SET `date` = '$date', `patient_name` = '$patient_name', `card_number` = '$card_number', `date_of_birth` = '$dob', `sex` = '$sex', `age` = '$age', `contact_address` = '$address', `state` = '$state', `telephone` = '$phone_number', `first_contact` = '$first_contact', `nok_name` = '$nok', `nok_relationship` = '$nok_relationship', `nok_address` = '$nok_address', `nok_phone` = '$nok_phone' WHERE `attendance_register`.`id` = $update_id";
      
      if ($db->conn->query($sql)) {
        header("location: edit-patient?id=$update_id");
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
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-patient">
            <i class="fas fa-plus"></i> Edit Patient Info
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
                  <?php if ($result) : ?>
                      <?php extract($result) ?>
                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $date ?></td>
                        <td><?= ucwords($patient_name) ?></td>
                        <td><?= $card_number ?></td>
                        <td><?= $date_of_birth ?></td>
                        <td><?= ucfirst($sex) ?></td>
                        <td><?= $age ?></td>
                        <td><?= $contact_address ?></td>
                        <td><?= $state ?></td>
                        <td><?= $telephone ?></td>
                        <td><?= ucwords($first_contact) ?></td>
                        <td><?= $nok_name ?></td>
                        <td><?= $nok_relationship ?></td>
                        <td><?= $nok_address ?></td>
                        <td><?= $nok_phone ?></td>
                        <td>
                          <a href="#" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-patient" style="font-size:13px;">
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