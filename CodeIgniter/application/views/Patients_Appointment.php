<section class="profile-section">
    <div class="main-heading">      
        <h5 class="modal-title text-center text-dark mb-4">MY APPOINTMENTS</h5>
    </div>
    <div class="profile-pat">
    <?php 
        foreach($patients_App_data as $patients_app){
           // var_dump($patients_App_data)
    ?>
        <div class="appointment-divs">
        <div class="my-details-links">
            <div class="links-heading">
                <div class="head-link">
                    <ul class="ul-pt-app">
                        <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Appointment_Listing_Patient')?>">Approve</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="#">Cancel</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="#">Attend</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="#">Miss</a>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-details">
            <div class="reg-form-div patent-details">
                <form class="reg-form form-patient-pro" method="post">
                    <h6 class="">APPOINTMENT : </h6>
                    <div class="detail-div-1">
                        <div class="detail-child">
                            <label class="col-form-label" for="Doctor-Name">Doctor's Name</label>
                            <input class="form-control" type="text" name="Doctor_Name" value="<?php echo $patients_app->full_name ?>" readonly>
                        </div>
                        <div class="detail-child">
                            <label class="col-form-label" for="Date">Date</label>
                            <input class="form-control" type="text" name="Date" value="<?php echo $patients_app->appointment_date ?>" readonly>
                        </div>
                    </div>
                    <div class="detail-div-1">
                        <div class="detail-child">
                            <label class="col-form-label" for="Patient-Number">Clinic</label>
                            <input class="form-control" type="text" name="Patient_Number" value="<?php echo $patients_app->clinics ?>" readonly>
                        </div>
                        <div class="detail-child">
                            <label class="col-form-label" for="Email">Email Address</label>
                            <input class="form-control" type="text" name="Email" value="<?php echo $patients_app->email ?>" readonly>
                        </div>
                    </div>
                    <div class="detail-div-2">
                        <div class="detail-child">
                            <label class="col-form-label" for="Time">Time</label>
                            <input class="form-control" type="text" name="Time-in" value="<?php echo $patients_app->time_in."  -  ".$patients_app->time_out ?>" readonly>
                        </div>    
                        <div class="links-appoinment">
                            <div class="doc-11 doc-12-sm">
                                <a href="<?php echo site_url('Patients_Assess_Doctor') ?>" >Patients Assessment</a>
                            </div>
                        </div>
                    </div>              
                </form>
            </div>
        </div>
        </div>
    </div>
    <?php 
       }                                   
    ?>
</section>