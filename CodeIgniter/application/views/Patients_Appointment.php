<section class="profile-section">
   <div class="container">
   <div class="main-heading">      
        <h5 class="modal-title text-center text-dark mb-4">MY APPOINTMENTS</h5>
    </div>
    <div id="tabs">
        
            <ul>
                    <li><a href="#tabs-1">Past</a></li>
                    <li><a href="#tabs-2">Present</a></li>
                    <li><a href="#tabs-3">Future</a></li>
            </ul>
 
        <div id="tabs-1">
                <?php
                $no_record = true;
                foreach($patients_App_data as $patients_app){
                    if(strtotime($patients_app->appointment_date) < strtotime(date('Y-m-d'))){
                        $no_record = false;
                        ?>
                <div class="my-details my-appointment">
                    <div class="reg-form-div patent-details appointment-pt-doc">
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
                                <div class="detail-child">
                                    <label class="col-form-label" for="Status">Status</label>
                                    <input class="form-control" type="text" name="Status" value="<?php echo $patients_app->appointment_status ?>" readonly>
                                </div>
                                <div class="detail-child">
                                    <div class="link-appointment">
                                        <?php if($patients_app->appointment_status == 'Attended'){?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Reviews') ?>?doc_rev_id=<?php echo $patients_app->doctors_id?>&pat_rev_id=<?php echo $patients_app->patient_id?>" >Review</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Prescriptions_show') ?>?appt_id=<?php echo $patients_app->appointment_id?>" >Prescriptions</a>
                                            </div>
                                            <?php 
                                        }else{
                                            ?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Cancel_appointments')?>?appt_id=<?php echo $patients_app->appointment_id ?>" >Cancel</a>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Patients_assess_doctor') ?>?appt_id= <?php echo $patients_app->appointment_id ?>" >Patients Assessment</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Chatbox'); ?>/index/<?php echo $patients_app->doctors_id ?>" >Chat</a>
                                            </div>
                                            
                                        </div>        
                                    </div>    
                                </div>              
                            </form>
                        </div>
                    </div>
                    
                    <?php 
                    }
                }
                if($no_record){
                    echo 'You have no appointments';
                }                                  
                ?>
        </div>
        <div id="tabs-2">
            <?php 
                $no_record = true;
                foreach($patients_App_data as $patients_app){
                    if(strtotime($patients_app->appointment_date) == strtotime(date('Y-m-d'))){
                        $no_record = false;
                        ?>
                <div class="my-details my-appointment">
                    <div class="reg-form-div patent-details appointment-pt-doc">
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
                                <div class="detail-child">
                                    <label class="col-form-label" for="Status">Status</label>
                                    <input class="form-control" type="text" name="Status" value="<?php echo $patients_app->appointment_status ?>" readonly>
                                </div>
                                <div class="detail-child">
                                    <div class="link-appointment">
                                        <?php if($patients_app->appointment_status == 'Attended'){?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Reviews') ?>?doc_rev_id=<?php echo $patients_app->doctors_id?>&pat_rev_id=<?php echo $patients_app->patient_id?>" >Review</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                            <a href="<?php echo site_url('Prescriptions_show') ?>?appt_id=<?php echo $patients_app->appointment_id?>" >Prescriptions</a>
                                            </div>
                                            <?php 
                                        }else{
                                            ?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Cancel_appointments')?>?appt_id=<?php echo $patients_app->appointment_id ?>">Cancel</a>
                                            </div>
                                            <?php
                                        }
                                        
                                        ?>
                                            <div class="links-buttons-pt">
                                            <a href="<?php echo site_url('Patients_assess_doctor') ?>?appt_id=<?php echo $patients_app->appointment_id ?>" >Patients Assessment</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Chatbox'); ?>/index/<?php echo $patients_app->doctors_id ?>" >Chat</a>
                                            </div>
                                            
                                        </div>        
                                    </div>    
                            </div>              
                        </form>
                    </div>
                </div>
                
                <?php 
                    }
                }
                if($no_record){
                    echo 'You have no appointments';
                }                                  
                ?>
        </div>
        <div id="tabs-3">
            <?php 
                $no_record = true;
                foreach($patients_App_data as $patients_app){
                    if(strtotime($patients_app->appointment_date) > strtotime(date('Y-m-d'))){
                        $no_record = false;
                        ?>
                <div class="my-details my-appointment">
                    <div class="reg-form-div patent-details appointment-pt-doc">
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
                                <div class="detail-child">
                                    <label class="col-form-label" for="Status">Status</label>
                                    <input class="form-control" type="text" name="Status" value="<?php echo $patients_app->appointment_status ?>" readonly>
                                </div>
                                <div class="detail-child">
                                    <div class="link-appointment">
                                        <?php if($patients_app->appointment_status == 'Attended'){?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Reviews') ?>?doc_rev_id=<?php echo $patients_app->doctors_id?>&pat_rev_id=<?php echo $patients_app->patient_id?>" >Review</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                            <a href="<?php echo site_url('Prescriptions_show') ?>?appt_id=<?php echo $patients_app->appointment_id?>" >Prescriptions</a>
                                            </div>
                                        <?php 
                                        }else{
                                            ?>
                                            <div class="links-buttons-pt">
                                            <a href="<?php echo site_url('Cancel_appointments')?>?appt_id=<?php echo $patients_app->appointment_id ?>">Cancel</a>
                                            </div>
                                            <?php
                                        }
                                            
                                            ?>
                                            <div class="links-buttons-pt">
                                            <a href="<?php echo site_url('Patients_assess_doctor') ?>?appt_id=<?php echo $patients_app->appointment_id ?>" >Patients Assessment</a>
                                            </div>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Chatbox'); ?>/index/<?php echo $patients_app->doctors_id ?>" >Chat</a>
                                            </div>

                                    </div>        
                                </div>    
                            </div>              
                        </form>
                    </div>
                </div>
            
            <?php 
                    }
            } 
            if($no_record){
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
    </div>
   </div>
</section>