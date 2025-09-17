<?php
require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
$db = new DB();

// ✅ Get ID safely
$e_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$e_id) {
    die("Invalid patient ID.");
}

// ✅ Fetch patient
$patient = $db->getPatient($e_id)[0] ?? null;
$states  = $db->getAllStates();

// ✅ Handle update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    $update_id = filter_input(INPUT_POST, 'update_id', FILTER_VALIDATE_INT);

    $data = [
        'date'             => $_POST['date'] ?? null,
        'patient_name'     => $_POST['patient_name'] ?? null,
        'card_number'      => $_POST['card_number'] ?? null,
        'date_of_birth'    => $_POST['dob'] ?? null,
        'sex'              => $_POST['sex'] ?? null,
        'age'              => $_POST['age'] ?? null,
        'contact_address'  => $_POST['address'] ?? null,
        'state'            => $_POST['state'] ?? null,
        'telephone'        => $_POST['phone_number'] ?? null,
        'first_contact'    => $_POST['f_c'] ?? null,
        'nok_name'         => $_POST['nok'] ?? null,
        'nok_relationship' => $_POST['nok_rel'] ?? null,
        'nok_address'      => $_POST['nok_address'] ?? null,
        'nok_phone'        => $_POST['nok_phone'] ?? null
    ];

    // Use DB class editPatient
    if ($db->editPatient($update_id, $data)) {
        header("Location: edit-patient.php?id={$update_id}&status=success");
        exit;
    } else {
        $error = "Failed to update patient.";
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
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-patient">
            <i class="fas fa-pen"></i> Edit Patient Info
          </button>
        </div>

        <?php if (!empty($_GET['status']) && $_GET['status'] === 'success'): ?>
          <div class="alert alert-success">Patient updated successfully.</div>
        <?php elseif (!empty($error)): ?>
          <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i> Patient Information
          </div>
          <div class="card-body">
            <?php if ($patient): ?>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0" style="font-size:13px;">
                  <thead>
                    <tr class="text-center">
                      <th>S/N</th><th>Date</th><th>Patient Name</th><th>Card No.</th>
                      <th>Date of Birth</th><th>Sex</th><th>Age</th><th>Address</th>
                      <th>State</th><th>Telephone</th><th>First Contact</th>
                      <th>NOK</th><th>Relationship</th><th>NOK Address</th><th>NOK Phone</th><th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= htmlspecialchars($patient['id']) ?></td>
                      <td><?= htmlspecialchars($patient['date']) ?></td>
                      <td><?= ucwords($patient['patient_name']) ?></td>
                      <td><?= htmlspecialchars($patient['card_number']) ?></td>
                      <td><?= htmlspecialchars($patient['date_of_birth']) ?></td>
                      <td><?= ucfirst($patient['sex']) ?></td>
                      <td><?= htmlspecialchars($patient['age']) ?></td>
                      <td><?= htmlspecialchars($patient['contact_address']) ?></td>
                      <td><?= htmlspecialchars($patient['state']) ?></td>
                      <td><?= htmlspecialchars($patient['telephone']) ?></td>
                      <td><?= ucwords($patient['first_contact']) ?></td>
                      <td><?= htmlspecialchars($patient['nok_name']) ?></td>
                      <td><?= htmlspecialchars($patient['nok_relationship']) ?></td>
                      <td><?= htmlspecialchars($patient['nok_address']) ?></td>
                      <td><?= htmlspecialchars($patient['nok_phone']) ?></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-patient">
                          <i class="fas fa-pen"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <p>No patient found.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php include '../footer.php'; ?>
      <?php include '../modals.php'; ?>
    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
  <?php include '../scripts.php'; ?>
</body>
</html>
