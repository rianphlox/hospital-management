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
              <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-lab_record">
                  <i class="fas fa-plus"></i> Add Record
              </button>
          </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-file-archive"></i>
            Patient Laboratory Record</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
                <thead>
                  <tr class="text-center">
                    <th>Patient Name</th>
                    <th>Laboratory</th>
                    <th>Result/Status</th>
                    <th>Date Released</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>X-Ray</td>
                    <td>OK</td>
                    <td>11-26-2019</td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-lab_record" style="font-size:13px;">
                        <i class="fas fa-pen"></i>
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
