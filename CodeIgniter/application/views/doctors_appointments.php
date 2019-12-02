<section class="profile-section">
    <div class="container">
        <div class="main-heading">      
            <h5 class="modal-title text-center text-dark mb-4">MY APPOINTMENTS</h5>
        </div>
        <div class="profile-pat">
            <?php 
                if(isset($doctors_App_data) && !empty($doctors_App_data)){
                foreach($doctors_App_data as $doctor_app){
            ?>
            <div class="my-details-links">
                <div class="links-heading">
                    <div class="head-link">
                        <ul class="ul-pt-app">
                            <div class="li-div-pt">
                                <li class="li-pt">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('Approve_appointments')?>?appt_id=<?php echo $doctor_app->appointment_id ?>">Approve</a>
                                    </div>
                                </li>
                            </div>
                            <div class="li-div-pt">
                                <li class="li-pt">
                                    <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Cancel_appointments')?>?appt_id=<?php echo $doctor_app->appointment_id ?>">Cancel</a>
                                    </div>
                                </li>
                            </div>
                            <div class="li-div-pt">
                                <li class="li-pt">
                                    <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Attended_appointments')?>?appt_id=<?php echo $doctor_app->appointment_id ?>">Attended</a>
                                    </div>
                                </li>
                            </div>
                            <div class="li-div-pt">
                                <li class="li-pt">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('Missed_appointments')?>?appt_id=<?php echo $doctor_app->appointment_id ?>">Missed</a>
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
                                <label class="col-form-label" for="Patient-Name">Patient's Name</label>
                                <input class="form-control" type="text" name="Doctor_Name" value="<?php echo $doctor_app->full_name ?>" readonly>
                            </div>
                            <div class="detail-child">
                                <label class="col-form-label" for="Date">Date</label>
                                <input class="form-control" type="text" name="Date" value="<?php echo $doctor_app->appointment_date ?>" readonly>
                            </div>
                        </div>
                        <div class="detail-div-1">
                            <div class="detail-child">
                                <label class="col-form-label" for="Patient-Number">Phone Number</label>
                                <input class="form-control" type="text" name="Patient_Number" value="<?php echo $doctor_app->phone_number ?>" readonly>
                            </div>
                            <div class="detail-child">
                                <label class="col-form-label" for="Email">Email Address</label>
                                <input class="form-control" type="text" name="Email" value="<?php echo $doctor_app->email ?>" readonly>
                            </div>
                        </div>
                        <div class="detail-div-2">
                            <div class="detail-child">
                                <label class="col-form-label" for="Time">Time</label>
                                <input class="form-control" type="text" name="Time-in" value="<?php echo $doctor_app->time_in."  -  ".$doctor_app->time_out ?>" readonly>
                            </div>   
                            <div class="detail-child">
                                <label class="col-form-label" for="Status">Status</label>
                                <input class="form-control" type="text" name="Status" value="<?php echo $doctor_app->appointment_status ?>" readonly>
                            </div>   
                        </div>       
                        <div class="deta
                        il-links">
                            <div class="links">
                                <div class="links-pt">
                                    <a href="<?php echo site_url('assessment') ?>?appt_id=<?php echo $doctor_app->appointment_id ?>" >Patients Assessment</a>
                                </div>
                                <div class="links-pt">
                                    <a href="<?php echo site_url('prescriptions-show') ?>?appt_id=<?php echo $doctor_app->appointment_id?>" >Prescriptions</a>
                                </div>
                                <div class="links-pt">
                                    <a href="<?php echo site_url('chatbox'); ?>/<?php echo $doctor_app->patient_id ?>" >Chat</a>
                                </div>
                            </div>
                        </div>       
                    </form>
                </div>
            </div>
        </div>
        <?php 
        } 
        }
        else{
            ?>
            <div class="no-app-div">
                <p>
                    You've no appointments
                </p>
            </div>
            <?php
        }                                 
        ?>
    </div>
</section>