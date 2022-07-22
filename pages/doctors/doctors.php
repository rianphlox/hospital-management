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
              <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-doctor">
                  <i class="fas fa-plus"></i> Add Doctor
              </button>
          </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Doctor Information</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:13px;">
                <thead>
                  <tr class="text-center">
                    <th>Record No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Field of Specialization</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>Paul Green</td>
                    <td>Cadiz City</td>
                    <td>09563224874</td>
                    <td>Physician</td>
                    <td>PG123</td>
                    <td>Password123</td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-doctor" style="font-size:13px;">
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
