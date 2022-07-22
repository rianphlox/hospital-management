<?php 
    $conn = new mysqli('localhost', 'root', '', 'hospital') or die("Failed to connect to MYSQLi" . $conn->connect_error);
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $patient_name = $_POST['patient_name'];
    $card_number = $_POST['card_number'];
    $age = $_POST['age'];
    $client_type = ucfirst($_POST['client_type']);
    $disc = $_POST['disc'];
    $transport = $_POST['transport'];
    $parity = $_POST['parity'];
    $dod = $_POST['dod'];
    $m_o_d = $_POST['m_o_d'];
    $partographs = $_POST['partograph'];
    // $r_partograph = "";
    // foreach ($partographs as $key => $val) {
    //     $r_partograph = $val == end($partographs) ? $r_partograph.=  "$val" : $r_partograph.= "$val, ";
    // }
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
    $temperature = $_POST['temperature'] . '°C';
    $name_of_delivery_personnel = $_POST['name_of_delivery_personnel'];

    // echo "<pre>" ; print_r($_POST) ; echo "</pre>";
    //   echo $r_partograph . "<br>" .$wtd;  
    
        

        $sql = "INSERT INTO `labour` (`date`, `patient_name`, `card_number`, `age`, `client_type`, `disc`, `transportation_in`, `parity`, `dod`, `m_o_d`, `partograph_used`, `recieved_oxy`, `m_c`, `recieved_mgso4`, `admitted`, `discharged`, `reffered_out`, `dead`, `time_of_delivery`, `pre_term`, `not_breathing_a_b`, `not_breathing_a_b_success`, `birth_weight`, `baby_gender`, `who_took_delivery`, `cord_clamp_time`, `gel_applied`, `baby_put_to_breast`, `temperature`, `name_of_delivery_personnel`) VALUES ('$date', '$patient_name', '$card_number', '$age', '$client_type', '$disc', '$transport', '$parity', '$dod', '$m_o_d', '$partographs', '$recieved_oxy', '$m_c', '$recieved_mgso4', '$admitted', '$discharged', '$reffered', '$dead', '$time', '$pre_term', '$nb_nc', '$not_breathing_a_b_success', '$birth_weight', '$baby_gender', 'CHEW', '$cord_clamp_time', '$gel_applied', '$baby_put_to_breast', '$temperature', '$name_of_delivery_personnel');";
        if ($conn->query($sql)) {
          header('location: labour?success=true');
        } else {
            die("Failed to execute");
        }
        
}
