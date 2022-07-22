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
              <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-consultation">
                  <i class="fas fa-plus"></i> Add Consultation
              </button>
          </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-stethoscope"></i>
            Consultation Information</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
                <thead>
                  <tr class="text-center">
                    <th>Patient</th>
                    <th>Diagnostic</th>
                    <th>Treatment</th>
                    <th>Blood Pressure</th>
                    <th>Weight</th>
                    <th>Attending Doctor</th>
                    <th>Date Recorded</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>Flue</td>
                    <td>Take Biogesic</td>
                    <td>110/80</td>
                    <td>70 KG</td>
                    <td>Paul Green</td>
                    <td>11-24-2019</td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-consultation" style="font-size:13px;">
                                <i class="fas fa-pen"></i>
                            </button>
                        </a>
                        <a href="#" data-toggle="tooltip" title="Add Medicine Dispersion">
                            <button type="button" class="btn btn-warning btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-medicine_dispersion" style="font-size:13px;">
                            <i class="fas fa-plus"></i> 
                            </button>
                        </a>
                        <a href="#" data-toggle="tooltip" title="Add Billing">
                            <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-billing" style="font-size:13px;">
                            <i class="fas fa-plus"></i> 
                            </button>
                        </a>
                    </td>
                  </tr>
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
