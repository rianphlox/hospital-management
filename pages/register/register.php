<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medical Record System</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-3 col-md-3">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Medical Record System</h1>
                    <h7 class="h7 text-gray-900 mb-4">Pleas select User Type</h7>
                  </div>
                  <form class="user">
                      <hr>
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#add-clerk1">
                          Clerk
                        </button>
                        <button type="button" class="btn btn-success btn-user btn-block" data-toggle="modal" data-target="#add-doctor1">
                          Doctor
                        </button>
                        <button type="button" class="btn btn-danger btn-user btn-block" data-toggle="modal" data-target="#add-patient1">
                          Patient
                        </button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                  </div>
                  <div class="text-center">
                    <a class="small" href="../login/login.php">Login Here.</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include '../modals.php'; ?>
  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>
