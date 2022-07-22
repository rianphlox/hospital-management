<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    
    $e_id = $_GET['id'] ? $db->conn->real_escape_string($_GET['id']) : "";
    !$e_id && header('location: opd');
    
    $result = $db->getOpdPatient($e_id)->fetch_assoc();
    

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