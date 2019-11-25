<section class="doc-det-pt-section">
    <div class=" mt-2 bg-white padding">
        <div class="doc-12">
            <div class="div-dc-li">
                <?php foreach($doctors as $doctor){?>
                <div class="img-doct">
                    <img src="../assets/images/doctors-profile.png" alt="doctors-profile">
                </div>
                <div class="doc-info">
                    <div class="pl-4">
                        <h2><?php echo $doctor->full_name?></h2>
                        <p><?php echo $doctor->department?></p>
                        <p><?php echo $doctor->gender?></p>
                        <p><?php echo $doctor->area?></p>
                    </div>
                    <form method="post">
                        <p>Select Date to Book Appointment</p>
                        <div>
                            <div>
                                <input name="date_of_appt" class="datepicker" type="text">
                                <?php echo form_error('date_of_appt', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <p>Select Appointment Time</p>
                        <div>
                            <div>
                                <label for="time_from_appt">From : </label>
                            </div>
                            <div>
                                <input name="time_from_appt" class="timepicker" type="text">
                                <?php echo form_error('time_from_appt', '<div class="error">', '</div>'); ?>

                            </div>
                            </div>
                            <div>
                                <div>
                                    <label for="time_to_appt">To : </label>
                                </div>
                                <div>
                                    <input name="time_to_appt" class="timepicker" type="text">
                                    <?php echo form_error('time_to_appt', '<div class="error">', '</div>'); ?>

                                </div>
                        </div>
                        <div>
                        <div class="appointmnet">
                            <div class="doc-11 doc-12-sm">        
                                <?php 
                                    if($this->session->userdata('role_id')){
                                ?>
                                    <input type="submit" name="submit-appt" value="Book Appointment">										 
                                <?php
                                    }else{
                                ?>
                                    <a href="<?php echo site_url('Login')?>"><i class="fa fa-phone"></i> Book Appointment</a>
                                <?php
                                    }
                                ?>                   								
                            </div>
                        </div>
                        </div>
                    </form>
                <div class="doc-3">
                    <ul class="grid-list-half pl-4">
                        <li><i class="fa fa-credit-card green-text"></i><?php echo $doctor->price?></li>
                        <li><i class="fa fa-circle"></i> Availability</li>
                        <li><i class="fa fa-circle"></i> Clinic Name</li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
