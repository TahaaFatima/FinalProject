<section class="profile-section">
    <div class="main-heading">      
        <h5 class="modal-title text-center text-dark mb-4">MY APPOINTMENTS</h5>
    </div>
    <div id="tabs">
        
            <ul>
                <div class="div-tab">
                    <li><a href="#tabs-1">Past</a></li>
                </div>
                <div class="div-tab">
                    <li><a href="#tabs-2">Present</a></li>
                </div>
                <div class="div-tab">
                    <li><a href="#tabs-3">Future</a></li>
                </div>
            </ul>
 
        <div id="tabs-1">
                <?php 
                foreach($patients_App_data as $patients_app){
                // var_dump($patients_App_data)
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
                                                <a href="<?php echo site_url('Prescriptions') ?>?priscription_id=<?php echo $patients_app->appointment_id?>" >Prescriptions</a>
                                            </div>
                                        <?php 
                                        }else{
                                            ?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Patients_Assess_Doctor') ?>" >Cancel</a>
                                            </div>
                                            <?php
                                        }
                                            
                                            ?>
                                            <div class="links-buttons-pt">
                                                <a href="<?php echo site_url('Patients_Assess_Doctor') ?>" >Patients Assessment</a>
                                            </div>

                                    </div>        
                                </div>    
                            </div>              
                        </form>
                    </div>
                </div>
            
            <?php 
            }                                   
            ?>
        </div>
        <div id="tabs-2">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus e.</p>
        </div>
        <div id="tabs-3">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos </p>
        </div>
    </div>
</section>