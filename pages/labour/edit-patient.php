<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    
    $e_id = $_GET['id'] ? $db->conn->real_escape_string($_GET['id']) : "";
    !$e_id && header('location: labour');
    
    $result = $db->getLaborPatient($e_id)->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body id="page-top">

  <?php include '../navbar.php'; ?>

  <div id="wrapper">

    <?php include '../sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid"><div class="d-sm-flex align-items-center justify-content-between mb-4">
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-labour">
            <i class="fas fa-plus"></i> Edit Labour Patient
          </button>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-circle"></i>
            Edit Labour Patient
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0" style="font-size:13px;">
                <thead>
                  <tr id="x_x" class="text-center">
                    <th>S/N</th>
                    <th>Date</th>
                    <th>Patient Name</th>
                    <th>Card No.</th>
                    <th>Age</th>
                    <th>Type of Client</th>
                    <th>Decision in Seeking Care</th>
                    <th>Transportation in</th>
                    <th>Parity</th>
                    <th>Date of Delivery</th>
                    <th>Mode of Delivery</th>
                    <th>Partograph Used</th>
                    <th>Recieved Oxytocin</th>
                    <th>Maternal Complication Seen</th>
                    <th>Recieved MgSO<sub>4</sub></th>
                    <th>Admitted</th>
                    <th>Discharged</th>
                    <th>Reffered Out</th>
                    <th>Dead</th>
                    <th>MDA Conducted</th>
                    <th>MDA Not Conducted</th>
                    <th>Time of Delivery</th>
                    <th>Pre-Term</th>
                    <th>Not Breathing/Crying at Birth</th>
                    <th>Not Breathing/Crying at Birth (success)</th>
                    <th>Weight at Birth</th>
                    <th>Sex of Baby</th>
                    <th>Who took Delivery</th>
                    <th>Time cord was Clamped</th>
                    <th>Was 4% gel CHX gel applied</th>
                    <th>Baby put to breast (dropdown)</th>
                    <th>Temperature at 1hr</th>
                    <th>Name of Delivery Personnel</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($result) : ?>
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