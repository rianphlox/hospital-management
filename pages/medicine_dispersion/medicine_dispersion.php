<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body id="page-top">

<?php include '../navbar.php'; ?>

  <div id="wrapper">

<?php include '../sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-circle"></i>
            Medicine Dispersion</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
                <thead>
                  <tr class="text-center">
                    <th>Patient</th>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>Biogesic</td>
                    <td>5</td>
                    <td>PHP 5.00</td>
                    <td>PHP 25.00</td>
                    <td>Sold</td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Edit">
                            <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-medicine_dispersion" style="font-size:13px;">
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
