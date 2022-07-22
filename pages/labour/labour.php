<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    $results = $db->getLaborPatients();
    $x = $results;



    if (isset($_POST['submit'])) {
      $date = $_POST['date'];
      $patient_name = $_POST['patient_name'];
      $card_number = $_POST['card_number'];
      $age = $_POST['age'];
      $client_type = $_POST['client_type'];
      $disc = $_POST['disc'];
      $transport = $_POST['transport'];
      $parity = $_POST['parity'];
      $dod = $_POST['dod'];
      $m_o_d = $_POST['m_o_d'];
      $partographs = $_POST['partograph'];
      $r_partograph = "";
      foreach ($partographs as $key => $val) {
        $r_partograph = $val == end($partographs) ? $r_partograph.=  "$val" : $r_partograph.= "$val, ";
      }
      $r_partograph = ucwords($r_partograph);
      $recieved_oxy = $_POST['recieved_oxy'];
      $m_c = $_POST['m_c'];
      $recieved_mgso4 = $_POST['recieved_mgso4'];
      $admitted = $_POST['admitted'];
      $discharged = $_POST['discharged'];
      $reffered = $_POST['reffered'];
      $dead = $_POST['dead'];
      $time = $_POST['time'];
      // $pre_term = $_POST['pre_term'];
      $pre_term = "";
      $nb_nc = $_POST['nb_nc'];
      $not_breathing_a_b_success = $_POST['not_breathing_a_b_success'];
      $birth_weight = $_POST['birth_weight'];
      $baby_gender = $_POST['baby_gender'];
      $who_took_delivery = $_POST['who_took_delivery'];
      $wtd = "";
      foreach ($who_took_delivery as $key => $val) {
        $wtd = $val == end($who_took_delivery) ? $wtd.=  "$val" : $wtd.= "$val, ";
      }
      $wtd =  ucwords($wtd);
      $cord_clamp_time = $_POST['cord_clamp_time'];
      $gel_applied = $_POST['gel_applied'];
      $baby_put_to_breast = $_POST['baby_put_to_breast'];
      $temperature = $_POST['temperature'];
      $name_of_delivery_personnel = $_POST['name_of_delivery_personnel'];

      // echo "<pre>" ; print_r($_POST) ; echo "</pre>";
      //   echo $r_partograph . "<br>" .$wtd;  
      
        

        $sql = "INSERT INTO `labour` (`date`, `patient_name`, `card_number`, `age`, `client_type`, `disc`, `transportation_in`, `parity`, `dod`, `m_o_d`, `partograph_used`, `recieved_oxy`, `m_c`, `recieved_mgso4`, `admitted`, `discharged`, `reffered_out`, `dead`, `time_of_delivery`, `pre_term`, `not_breathing_a_b`, `not_breathing_a_b_success`, `birth_weight`, `baby_gender`, `who_took_delivery`, `cord_clamp_time`, `gel_applied`, `baby_put_to_breast`, `temperature`, `name_of_delivery_personnel`) VALUES ( '$date', '$patient_name', '$card_number', '$age', '$client_type', '$disc', '$transport', '$parity', '$dod', '$m_o_d', '$r_partograph', '$recieved_mgso4', '$m_c', '$recieved_mgso4', '$admitted', '$discharged', '$reffered', '$dead', '$time', '$pre_term', '$nb_nc', '$not_breathing_a_b_success', $birth_weight', '$baby_gender', '$wtd', '$cord_clamp_time', '$gel_applied', '$baby_put_to_breast', '$temperature.°C', '$name_of_delivery_personnel')";
        if ($db->conn->query($sql)) {
          header('location: labour?success=rass');
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
          <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-labour">
            <i class="fas fa-plus"></i> Add Labour Patient
          </button>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-circle"></i>
            Labour Patient
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:13px;">
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
                    <!-- <th>MDA Conducted</th>
                    <th>MDA Not Conducted</th> -->
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
                <tbody id="tbody">
                  <?php if ($results->num_rows) : ?>
                      <?php foreach ($results->fetch_all(MYSQLI_ASSOC) as $result => $val) : ?>
                        <?php extract($val) ?>
                        <tr>
                          <?php foreach ($val as $k => $v) : ?>
                            <td><?= $v ?></td>
                          <?php endforeach; ?>
                          <td>
                            <a href="edit-patient?id=<?= $id ?>" data-toggle="tooltip" title="Edit">
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
  <!-- <script>  
    fetch('get.php')
      .then(res => res.json())
      .then(data => {
        output = ''
        data.forEach(element => {
          output += `
              <tr>
                <td>${data.indexOf(element) + 1}</td>
                <td>${element.date}</td>
                <td>${element.patient_name}</td>
                <td>${element.card_number}</td>
                <td>${element.age}</td>
                <td>${element.client_type}</td>
                <td>${element.disc}</td>
                <td>${element.transportation_in}</td>
                <td>${element.parity}</td>
                <td>${element.dod}</td>
                <td>${element.m_o_d}</td>
                <td>${element.partograph_used}</td>
                <td>${element.recieved_oxy}</td>
                <td>${element.m_c}</td>
                <td>${element.recieved_mgso4}</td>
                <td>${element.admitted}</td>
                <td>${element.discharged}</td>
                <td>${element.reffered_out}</td>
                <td>${element.dead}</td>
                <td>${element.time_of_delivery}</td>
                <td>${element.pre_term}</td>
                <td>${element.not_breathing_a_b}</td>
                <td>${element.not_breathing_a_b_success}</td>
                <td>${element.birth_weight}</td>
                <td>${element.baby_gender}</td>
                <td>${element.who_took_delivery}</td>
                <td>${element.cord_clamp_time}</td>
                <td>${element.gel_applied}</td>
                <td>${element.baby_put_to_breast}</td>
                <td>${element.temperature}</td>
                <td>${element.name_of_delivery_personnel}</td>
                
                <td>
                    <a href="edit-patient?id=${element.id}" data-toggle="tooltip" title="Edit">
                        <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-patient" style="font-size:13px;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </a>
                </td>
              </tr>`
        });
        // document.querySelector('#tbody').appendChild(output)
        document.querySelector('#tbody').innerHTML = output
      })
  </script> -->

</body>

</html>