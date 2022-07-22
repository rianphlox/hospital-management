<div class="modal fade" id="add-patient">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="patient_name">Patient Name</label>
                                <input type="text" name="patient_name" class="form-control" id="Patient Name" placeholder="Patient Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="card_number">Card Number</label>
                                <input type="text" name="card_number" class="form-control" id="card_number" placeholder="Card number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" class="form-control" id="dob" placeholder="Date of Birth">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender</label>
                                <select name="sex" class="form-control">
                                    <!-- <option>-- Select --</option> -->
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control" id="age" placeholder="Age">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="State">State</label>

                                <select name="state" class="form-control">
                                    <!-- <option>-- Select --</option> -->
                                    <?php foreach ($states as $state) : ?>
                                        <?php extract($state) ?>
                                        <option value="<?= $state ?>"><?= $state ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone_num">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_num" placeholder="Phone number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="f_c">First Contact</label>
                                <select name="f_c" class="form-control">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="nok">Next of Kin</label>
                                <input type="text" name="nok" class="form-control" id="nok" placeholder="Next of Kin">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nok_relationship">(N.O.K) Relationship</label>
                                <select name="nok_rel" class="form-control">
                                    <option value="Sister">Sister</option>
                                    <option value="Wife">Wife</option>
                                    <option value="Husband">Husband</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Cousin">Cousin</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Niece">Niece</option>
                                    <option value="Nephew">Nephew</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="nok">Address(NOK)</label>
                                <!-- <input type="text" name="nok" class="form-control" id="nok" placeholder="Next of Kin"> -->
                                <textarea class="form-control" name="nok_address" placeholder="Address(Next of Kin)" id="nok_address"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="nok_phone">Phone Number(NOK)</label>
                                <input type="tel" name="nok_phone" class="form-control" id="nok_phone" placeholder="Phone Number(Next of Kin)">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-patient -->
<div class="modal fade" id="add-opd">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add OPD Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="opd" role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient_name">Date</label>
                                <input type="text" name="patient_name" class="form-control" id="p_n" placeholder="Patient name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="card_number">Card Number</label>
                                <input type="text" name="card_number" class="form-control" id="card_number" placeholder="Card number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender</label>
                                <select name="sex" class="form-control">
                                    <!-- <option>-- Select --</option> -->
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Age Grade</label>
                                <select name="age_grade" class="form-control">
                                    <!-- <option>-- Select --</option> -->
                                    <option value="0-28 days">0-28 days</option>
                                    <option value="29days - 11months">29days - 11months</option>
                                    <option value="12months - 59months">12months - 59months</option>
                                    <option value="5-9 years">5-9 years</option>
                                    <option value="10-19 years">10-19 years</option>
                                    <option value=">= 20 years">>= 20 years</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control" id="age" placeholder="Age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Attendance Type">Attendance Type</label>
                                <select name="attendance_type" class="form-control">
                                    <option value="New">New</option>
                                    <option value="Follow Up">Follow Up</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="weight">Weight</label>
                                <input type="text" name="weight" class="form-control" id="weight" placeholder="Weight(kg)">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="height">Height</label>
                                <input type="text" name="height" class="form-control" id="height" placeholder="Height (m)">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bmi">BMI</label>
                                <input type="text" name="bmi" class="form-control" id="bmi" placeholder="BMI">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="presenting_complaints">Presenting Complaint(s)</label>
                                <textarea name="presenting_complaints" id="presenting_complaints" placeholder="Presenting Complaints" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lab_inv_done">Lab Investigation</label>
                                <select name="lab_inv_done" class="form-control">
                                    <option value="wilder">Wilder</option>
                                    <option value="malaria">Malaria</option>
                                    <option value="typhoid">Typhoid</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="diagnosis">Diagnosis</label>
                                <textarea class="form-control" name="diagnosis" placeholder="Diagnosis" id="diagnosis"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nok">Drugs Given</label>
                                <textarea class="form-control" name="drugs_given" placeholder="Drugs Given" id="dg"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="outcome">Outcome of Visit</label>
                                <select name="outcome_of_visits" class="form-control">
                                    <option value="nt">NT</option>
                                    <option value="t">T</option>
                                    <option value="d">A</option>
                                    <option value="r">RO</option>
                                    <option value="d">D</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clinical_diagnosis">Clinical Diagnosis</label>
                                <select name="clinical_diagnosis" id="clinical_diagnosis" class="form-control">
                                    <option value="<5yrs"><5yrs </option>
                                    <option value=">5yrs">>5yrs </option>
                                    <option value="pw">PW</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ldr">Lab Diagnosis (RDT)</label>
                                <select name="rdt" class="form-control" id="ld">
                                    <option value=""></option>
                                    <option value="< 5yrs"> < 5yrs</option>
                                    <option value="> 5yrs">> 5yrs</option>
                                    <option value="> 5yrs">> 5yrs</option>
                                    <option value="PW">PW</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="microscopy">Lab Diagnosis (Microscopy)</label>
                                <select class="form-control" name="microscopy" class="form-control" id="microscopy">
                                    <option value=""></option>
                                    <option value="< 5yrs POS">< 5yrs POS </option>
                                    <option value="> 5yrs POS">> 5yrs POS</option>
                                    <option value="< 5yrs NEG">< 5yrs NEG</option>
                                    <option value="> 5yrs NEG">> 5yrs NEG</option>
                                    <option value="PW">PW</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="act_given">ACT given</label>
                                <select class="form-control" name="act_given" id="act_given">
                                    <option value="<5yrs"><5yrs</option>
                                    <option value=">5yrs">>5yrs</option>
                                    <option value="PW">PW</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="s_m">Severe Malaria</label>
                                <select class="form-control" name="severe_malaria" id="a_m">
                                    <option value=""></option>
                                    <option value="<5yrs"><5yrs</option>
                                    <option value=">5yrs">>5yrs</option>
                                    <option value="PW">PW</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pre_referral_">Pre-referral Treatment</label>
                                <select class="form-control" name="pre_referral_treatment" id="pre_referral_treatment">
                                    <option value=""></option>
                                    <option value="IV-Artesunate">IV artesunate</option>
                                    <option value="IM/IV-Artemether">IM/IV artemether</option>
                                    <option value="Other-Referral">Other Referral</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tb_screened">TB Screened</label>
                                <select class="form-control" name="tubeculosis" id="tb_screened">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="hepatitis_b">Hepatitis B</label>
                                <select class="form-control" name="hepatitis_b" id="hepatitis_b">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="hepatitis_c">Hepatitis C</label>
                                <select class="form-control" name="hepatitis_c" id="hepatitis_c">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender_violence">Gender Violence</label>
                                <select class="form-control" name="gender_violence" id="gender_violence">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-opd -->
<div class="modal fade" id="add-labour">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Labour Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="get" role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="card_number">Patient Name</label>
                                <input type="text" name="patient_name" class="form-control" id="patient_name" placeholder="Patient Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="card_number">Card Number</label>
                                <input type="text" name="card_number" class="form-control" id="card_number" placeholder="Card number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control" id="age" placeholder="Age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="client_type">Type of Client</label>
                                <select name="client_type" class="form-control">
                                    <option value="booked">Booked</option>
                                    <option value="Unbooked">Unbooked</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="disc">Type of Client</label>
                                <select name="disc" class="form-control">
                                    <option value=">24hrs">> 24hrs</option>
                                    <option value="<24hrs">< 24hrs</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="transport">Transportation In</label>
                                <input type="text" name="transport" class="form-control" id="transport" placeholder="Transportation in">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Parity">Parity</label>
                                <input type="number" name="parity" class="form-control" id="parity" placeholder="Parity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dod">Date of Delivery</label>
                                <input type="date" name="dod" class="form-control" id="dod" placeholder="Date of Delivery">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mod">Mode of Delivery</label>
                                <select name="m_o_d" class="form-control" id="m_o_d">
                                    <option value="SVD">SVD</option>
                                    <option value="C/S">C/S</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nok_relationship">Partograph Used</label>
                                <select name="partograph"  class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="r_o">Recieved Oxytocin</label>
                                <select name="recieved_oxy" class="form-control" id="r_o">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="m_c">Maternal Complication</label>
                                <select name="m_c" class="form-control" id="m_c">
                                    <option value="nil">Nil</option>
                                    <option value="APH">APH</option>
                                    <option value="PPH">PPH</option>
                                    <option value="RPC">RPC</option>
                                    <option value="PL">PL</option>
                                    <option value="PET">PET</option>
                                    <option value="ET">ET</option>
                                    <option value="RU">RU</option>
                                    <option value="SEP">SEP</option>
                                    <option value="OL">OL</option>
                                    <option value="Abt">Abt</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mgso4">Recieved MgS0<sub>4</sub></label>
                                <select name="recieved_mgso4" class="form-control" id="mgso4">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="admitted">Admitted</label>
                                <select name="admitted" class="form-control" id="admitted">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="discharged">Discharged</label>
                                <select name="discharged" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="r_o">Reffered Out</label>
                                <select name="reffered" class="form-control">
                                    <option value="no">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ld">Dead</label>
                                <select name="dead" class="form-control" id="dead">
                                    <option value=""></option>
                                    <option value="MDA conducted">MDA Conducted</option>
                                    <option value="MDA not conducted">MDA Not Conducted</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ld">Time of Delivery</label>
                                <input type="time" name="time" class="form-control" id="time">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="act_given">Pre-Term</label>
                                <input type="checkbox" value="pre-term" name="pre_term" class="form-control" id="pre-term">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nb_nc">Not Breathing/Crying at Birth</label>
                                <select class="form-control" name="nb_nc" id="nb_nc">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nb_nc_rs">Not Breathing/Crying at Birth Resuscitated Succesfully</label>
                                <select class="form-control" name="not_breathing_a_b_success" id="nb_nc_rs">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="b_w">Weight at Birth</label>
                                <input type="text" placeholder="Baby Weight(kg)" name="birth_weight" id="b_w" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="baby_sex">Baby Gender</label>
                                <select class="form-control" name="baby_gender" id="baby_sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="w_t_d">Who took Delivery</label>
                                <select class="form-control" multiple name="who_took_delivery[]" id="w_t-d">
                                    <option value="doctor">Doctor</option>
                                    <option value="nurse">Midwife</option>
                                    <option value="chew">CHEW</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="clamped_cord_time">Time cord was Clamped</label>
                                <input type="time" name="cord_clamp_time" id="clamped_cord_time" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gel">Was 4% gel added?</label>
                                <select name="gel_applied" id="gel" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="baby_ptb">Baby put to Breast</label>
                                <select name="baby_put_to_breast" id="bby_ptb" class="form-control">
                                    <option value="Within 1 hour">Within 1 hour</option>
                                    <option value="After 1 hour">After 1 hour</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="temperature">Temperature after 1hour</label>
                                <input type="text" placeholder="Temperature" name="temperature" id="temperature" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="n_o_d_p">Name of Delivery Personnel(s).</label>
                                <textarea placeholder="Separate with comma" name="name_of_delivery_personnel" id="n_o_d_p" class="form-control"></textarea>
                            </div>
                            
                            
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-labour -->
<div class="modal fade" id="edit-patient">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit-patient" method="POST" role="form">
                    <input type="hidden" value="<?= $e_id ?>" name="update_id" id="update_id">
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="date">Date</label>
                                    <input type="date" value="<?= date("Y-m-d"); ?>" name="date" class="form-control" id="update_date" placeholder="Date">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="patient_name">Patient Name</label>
                                    <input type="text" name="patient_name" class="form-control" id="update_Patient Name"value="<?= $patient_name ?>" placeholder="Patient Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="card_number">Card Number</label>
                                    <input type="text" value="<?= $card_number ?>" name="card_number" class="form-control" id="update_card_number" placeholder="Card number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="dob">Date of birth</label>
                                    <input type="date" name="dob" class="form-control" id="update_dob" placeholder="Date of Birth">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Gender">Gender</label>
                                    <select name="sex" class="form-control">
                                        <!-- <option>-- Select --</option> -->
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="age">Age</label>
                                    <input type="number" value="<?= $age ?>" name="age" class="form-control" id="update_age" placeholder="Age">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address">Address</label>
                                    <input type="text" value="<?= $contact_address ?>" name="address" class="form-control" id="update_address" placeholder="Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="State">State</label>

                                    <select name="state" class="form-control">
                                        <?php foreach ($states as $state) : ?>
                                            <?php extract($state) ?>
                                            <option value="<?= $state ?>"><?= $state ?></option>
                                        <?php endforeach ?>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone_num">Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" id="update_phone_num" value="<?= $telephone ?>" placeholder="Phone number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="f_c">First Contact</label>
                                    <select name="f_c" class="form-control">
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="nok">Next of Kin</label>
                                    <input type="text" value="<?= $nok_name ?>" name="nok" class="form-control" id="update_nok" placeholder="Next of Kin">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nok_relationship">(N.O.K) Relationship</label>
                                    <select name="nok_rel" class="form-control">
                                        <option value="Sister">Sister</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Cousin">Cousin</option>
                                        <option value="Friend">Friend</option>
                                        <option value="Niece">Niece</option>
                                        <option value="Nephew">Nephew</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="nok">Address(NOK)</label>
                                    <!-- <input type="text" name="nok" class="form-control" id="update_nok" placeholder="Next of Kin"> -->
                                    <textarea class="form-control" name="nok_address" placeholder="Address(Next of Kin)" id="update_nok_address"><?= $nok_address ?></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="nok_phone">Phone Number(NOK)</label>
                                    <input type="tel" name="nok_phone" class="form-control" id="update_nok_phone" value="<?= $nok_phone ?>" placeholder="Phone Number(Next of Kin)">
                                </div>
                            </div>
                        </div>
                        <button name="edit" type="submit" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-patient -->
<div class="modal fade" id="add-queue">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Queue</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Patient Name</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>John Doe</option>
                                    <option>Eric Spoe</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date">Date</label>
                                <input type="date" class="form-control" id="Date" placeholder="Date">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-queue -->
<div class="modal fade" id="add-doctor">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact Number">Contact Number</label>
                                <input type="number" class="form-control" id="Contact Number" placeholder="Contact Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Field of Specialization</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-doctor -->
<div class="modal fade" id="edit-doctor">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact Number">Contact Number</label>
                                <input type="number" class="form-control" id="Contact Number" placeholder="Contact Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Field of Specialization</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-doctor -->
<div class="modal fade" id="add-cases">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Cases/Disease</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="textarea" class="form-control" id="Description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-cases -->
<div class="modal fade" id="edit-cases">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Cases/Disease</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="textarea" class="form-control" id="Description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-cases -->
<div class="modal fade" id="add-medicine">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Medicine</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Purpose">Purpose</label>
                                <textarea type="textarea" class="form-control" id="Purpose" placeholder="Purpose"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Initial Quantity">Initial Quantity</label>
                                <input type="number" class="form-control" id="Initial Quantity" placeholder="Initial Quantity">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Delivered">Date Delivered</label>
                                <input type="date" class="form-control" id="Date Delivered" placeholder="Date Delivered">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-medicine -->
<div class="modal fade" id="edit-medicine">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Medicine</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Purpose">Purpose</label>
                                <textarea type="textarea" class="form-control" id="Purpose" placeholder="Purpose"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Initial Quantity">Initial Quantity</label>
                                <input type="number" class="form-control" id="Initial Quantity" placeholder="Initial Quantity">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Delivered">Date Delivered</label>
                                <input type="date" class="form-control" id="Date Delivered" placeholder="Date Delivered">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-medicine -->
<div class="modal fade" id="add-consultation">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Consultation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Patient">Patient</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>John Doe</option>
                                    <option>Kevin Fiege</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Diagnostic">Diagnostic</label>
                                <input type="text" class="form-control" id="Diagnostic" placeholder="Diagnostic">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Treatment">Treatment</label>
                                <input type="text" class="form-control" id="Treatment" placeholder="Treatment">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Blood Pressure">Blood Pressure</label>
                                <input type="text" class="form-control" id="Blood Pressure" placeholder="Blood Pressure">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Weight">Weight</label>
                                <input type="number" class="form-control" id="Weight" placeholder="KG">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Attending Doctor">Attending Doctor</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Dr. Paul Green</option>
                                    <option>Dr. Mike Miller</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Recorded">Date Recorded</label>
                                <input type="date" class="form-control" id="Date Recorded" placeholder="Date Recorded">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-consultation -->
<div class="modal fade" id="edit-consultation">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Consultation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Patient">Patient</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>John Doe</option>
                                    <option>Kevin Fiege</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Diagnostic">Diagnostic</label>
                                <input type="text" class="form-control" id="Diagnostic" placeholder="Diagnostic">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Treatment">Treatment</label>
                                <input type="text" class="form-control" id="Treatment" placeholder="Treatment">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Blood Pressure">Blood Pressure</label>
                                <input type="text" class="form-control" id="Blood Pressure" placeholder="Blood Pressure">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Weight">Weight</label>
                                <input type="number" class="form-control" id="Weight" placeholder="KG">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Attending Doctor">Attending Doctor</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Dr. Paul Green</option>
                                    <option>Dr. Mike Miller</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Recorded">Date Recorded</label>
                                <input type="date" class="form-control" id="Date Recorded" placeholder="Date Recorded">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-consultation -->
<div class="modal fade" id="add-medicine_dispersion">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Medicine Dispersion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Medicine">Medicine</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>Biogesic</option>
                                    <option>Paracetamol</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">Quantity</label>
                                <input type="number" class="form-control" id="Quantity" placeholder="Quantity">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Amount">Amount</label>
                                <input type="number" class="form-control" id="Amount" placeholder="Amount">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Status">Status</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>Sold</option>
                                    <option>Not Sold</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-medicine_dispersion -->
<div class="modal fade" id="edit-medicine_dispersion">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Medicine Dispersion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Medicine">Medicine</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>Biogesic</option>
                                    <option>Paracetamol</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">Quantity</label>
                                <input type="number" class="form-control" id="Quantity" placeholder="Quantity">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Amount">Amount</label>
                                <input type="number" class="form-control" id="Amount" placeholder="Amount">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Status">Status</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>Sold</option>
                                    <option>Not Sold</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-medicine_dispersion -->
<div class="modal fade" id="add-lab_record">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Record</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Patient Name</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>John Doe</option>
                                    <option>Mike Miller</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Laboratory">Laboratory</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>X-Ray</option>
                                    <option>Hematology</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Result/Status">Result/Status</label>
                                <input type="text" class="form-control" id="Result/Status" placeholder="Result/Status">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Released">Date Released</label>
                                <input type="date" class="form-control" id="Date Released" placeholder="Date Released">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-lab_record -->
<div class="modal fade" id="edit-lab_record">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Record</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Patient Name</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>John Doe</option>
                                    <option>Mike Miller</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Laboratory">Laboratory</label>
                                <select class="form-control">
                                    <option>-- SELECT --</option>
                                    <option>X-Ray</option>
                                    <option>Hematology</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Result/Status">Result/Status</label>
                                <input type="text" class="form-control" id="Result/Status" placeholder="Result/Status">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Released">Date Released</label>
                                <input type="date" class="form-control" id="Date Released" placeholder="Date Released">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-lab_record -->
<div class="modal fade" id="add-billing">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Billing</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Bill To">Bill To</label>
                                <input type="text" class="form-control" id="Bill To" placeholder="Bill To">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Bill Amount">Bill Amount</label>
                                <input type="number" class="form-control" id="Bill Amount" placeholder="PHP">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Recorded">Date Recorded</label>
                                <input type="date" class="form-control" id="Date Recorded" placeholder="Date Recorded">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-billing -->
<div class="modal fade" id="edit-billing">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Billing</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Bill To">Bill To</label>
                                <input type="text" class="form-control" id="Bill To" placeholder="Bill To">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Bill Amount">Bill Amount</label>
                                <input type="number" class="form-control" id="Bill Amount" placeholder="PHP">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Date Recorded">Date Recorded</label>
                                <input type="date" class="form-control" id="Date Recorded" placeholder="Date Recorded">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-billing -->
<div class="modal fade" id="add-clerk">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Clerk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact No.">Contact No.</label>
                                <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-clerk -->
<div class="modal fade" id="edit-clerk">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Clerk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact No.">Contact No.</label>
                                <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-clerk -->


<div class="modal fade" id="add-patient1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register as Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Age">Age</label>
                                <input type="number" class="form-control" id="Age" placeholder="Age">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact No.">Contact No.</label>
                                <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-patient1 for registration-->
<div class="modal fade" id="add-doctor1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register as Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact Number">Contact Number</label>
                                <input type="number" class="form-control" id="Contact Number" placeholder="Contact Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Patient Name">Field of Specialization</label>
                                <select class="form-control">
                                    <option>-- Select --</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-doctor for registration-->
<div class="modal fade" id="add-clerk1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register as Clerk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Record Number">Record Number</label>
                                <input type="number" class="form-control" id="Record Number" placeholder="Record Number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="First Name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Middle Name">Middle Name</label>
                                <input type="text" class="form-control" id="Middle Name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact No.">Contact No.</label>
                                <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-clerk for registration-->