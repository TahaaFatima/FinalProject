<section class="doc-det-pt-section">
    <div class=" mt-2 bg-white padding">
        <div class="doc-12">
            <div class="div-dc-li">
                <?php foreach($doctors as $doctor){?>
                    <div class="parent-div-doc">
                        <div class="img-doct right-div">
                            <?php 
                                if(!empty($doctor->images)){
                            ?>
                                    <img class="profile-image" src="<?php echo "$image_path.$doctor->images"?>" alt="doctors-profile">
                            <?php
                                }elseif(empty($doctor->images) && $doctor->gender == "female"){
                            ?>
                                <img class="profile-image" src="../assets/images/doctors-profile.png" alt="doctors-profile">
                            <?php
                                }elseif(empty($doctor->images) && $doctor->gender == "male"){
                            ?>
                                <img class="profile-image" src="../assets/images/profile-male.jpg" alt="doctors-profile">
                            <?php        
                                }
                            ?>
                            <div class="rate">
                                <div class="rating-star">
                                    <div id="rateYo-<?php echo $doctor->doctors_id ?>" data-rating="<?php echo isset($ratings[$doctor->doctors_id]['rating']) ? $ratings[$doctor->doctors_id]['rating'] : 0 ; ?>" class="fetch-rating rating">
                                    </div>
                                </div>
                            </div>   
                        </div>    
                        <div class="right-div doc-info">
                            <div class="pl-4">
                                <h2><?php echo $doctor->full_name?></h2>
                                <p><?php echo  $doctor->department?></p>
                                <p><?php echo  $doctor->gender?></p>
                                <p><?php echo  $doctor->area?></p>
                                <p><?php echo  $doctor->email?></p>
                            </div>
                        </div>
                        <div class="doc-3">
                            <ul class="grid-list-half pl-4">
                                <li><i class="fa fa-credit-card green-text"></i><?php echo $doctor->price?></li>
                                <li><i class="fa fa-circle"></i><?php echo $doctor->time_in?> - <?php echo $doctor->time_out?></li>
                                <li><i class="fa fa-circle"></i><?php echo $doctor->clinics?></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>            
<section class="reg-section">
    <div class="reg-form-div">
        <div class="reg-form">
            <form class="form-div-appt" method="post">
                <div class="main-heading">
                    <h5 class="modal-title text-center text-dark mb-4"> BOOK APPOINTMENT</h5>
                </div>
                <label>Select Date to Book Appointment</label>
                <div>
                    <div>
                        <input name="date_of_appt" class="form-control time-slot datepicker" type="text">
                        <?php echo form_error('date_of_appt', '<div class="error">', '</div>'); ?>
                    </div>
                </div>
                <label>Select Appointment Time</label>
                <div>
                    <div>
                        <label for="time_from_appt">From : </label>
                    </div>
                    <div>
                        <input name="time_from_appt" class="form-control time-slot timepicker" type="text">
                        <?php echo form_error('time_from_appt', '<div class="error">', '</div>'); ?>

                    </div>
                </div>
                <div>
                    <div>
                        <label for="time_to_appt">To : </label>
                    </div>
                    <div>
                        <input name="time_to_appt" class="form-control time-slot timepicker" type="text">
                        <?php echo form_error('time_to_appt', '<div class="error">', '</div>'); ?>

                    </div>
                </div>
                <div class="main-heading">
                    <h5 class="modal-title text-center text-dark mb-4">PATIENT'S ASSESSMENT FORM</h5>
                </div>
                <div>
                    <label class="col-form-label" for="weight">Weight</label>
                    <input class="form-control" type="text" name="Weight">
                    <?php echo form_error('Weight', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="ailments">Previous Ailments</label>
                    <input class="form-control" type="text" name="ailments">
                    <?php echo form_error('ailments', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="health">Current health concerns</label>
                    <input class="form-control" type="text" name="health_concern">
                    <?php echo form_error('health_concern', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="medicines">List your current medicines</label>
                    <input class="form-control" type="text" name="medicines">
                    <?php echo form_error('medicines', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Allergies">Do you suffer from any allergies? List in detail.</label>
                    <textarea name="allergies" class="form-control" cols="30" rows="5"></textarea>
                    <?php echo form_error('allergies', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="exercise">How often do you exercise?</label>
                    <input class="form-radio" type="radio" name="exercise" value="never"><label for="exercise">Never</label>
                    <input class="form-radio" type="radio" name="exercise" value="1-2days-week"><label for="exercise">1 – 2 days a week</label>
                    <input class="form-radio" type="radio" name="exercise" value="3-4days-week"><label for="exercise">3 – 4 days a week</label>
                    <input class="form-radio" type="radio" name="exercise" value="1-2days-months"><label for="exercise">1 – 2 days a month</label>
                    <?php echo form_error('exercise', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Alcohol">Alcohol Consumption</label>
                    <input class="form-radio" type="radio" name="Alcohol" value="Don’t Drink"><label for="Alcohol">Don’t Drink</label>
                    <input class="form-radio" type="radio" name="Alcohol" value="1-2Glasses/day"><label for="Alcohol">1 - 2 Glasses/day</label>
                    <input class="form-radio" type="radio" name="Alcohol" value="3-5 Glasses/day"><label for="Alcohol">3 - 5 Glasses/day</label>
                    <input class="form-radio" type="radio" name="Alcohol" value="5+ Glasses/day"><label for="Alcohol">5+ Glasses/day</label>
                    <?php echo form_error('Alcohol', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Caffeine">Caffeine Consumption</label>
                    <input class="form-radio" type="radio" name="Caffeine" value="Don’t Drink"><label for="Caffeine">I avoid completely.</label>
                    <input class="form-radio" type="radio" name="Caffeine" value="1-2 cups/day"><label for="Caffeine">1 - 2 cups/day</label>
                    <input class="form-radio" type="radio" name="Caffeine" value="3-5 cups/day"><label for="Caffeine">3 - 5 cups/day</label>
                    <input class="form-radio" type="radio" name="Caffeine" value="5+ cups/day"><label for="Caffeine">5 + cups/day</label>
                    <?php echo form_error('Caffeine', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Smoke">Smoke Habits</label>
                    <input class="form-radio" type="radio" name="Smoke" value="No"><label for="Smoke">No</label>
                    <input class="form-radio" type="radio" name="Smoke" value="0-1 Pack/day"><label for="Smoke">0 - 1 Pack/day</label>
                    <input class="form-radio" type="radio" name="Smoke" value="2-3 Pack/day"><label for="Smoke">2 - 3 Pack/day</label>
                    <input class="form-radio" type="radio" name="Smoke" value="3+ Pack/day"><label for="Smoke">3 + Pack/day</label>
                    <?php echo form_error('Smoke', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Sleeping">Sleeping Hours</label>
                    <input class="form-radio" type="radio" name="Sleeping" value="Less than 8 hours"><label for="Sleeping">Less than 8 hours</label>
                    <input class="form-radio" type="radio" name="Sleeping" value="8-12 hours"><label for="Sleeping">8 - 12 hours</label>
                    <input class="form-radio" type="radio" name="Sleeping" value="More than 12 hours"><label for="Sleeping">More than 12 hours</label>
                    <?php echo form_error('Sleeping', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="other_details">Include others details regarding medical history</label>
                    <textarea name="other_details" class="form-control" cols="30" rows="7"></textarea>
                    <?php echo form_error('other_details', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <div class="appointmnet">
                        <div class="doc-11 doc-12-sm">
                            <?php
                            if ($this->session->userdata('role_id')) {
                                ?>
                                <input type="submit" class="form-control submit-appt" name="submit-appt" value="Book Appointment">
                            <?php
                            } else {
                                ?>
                                <a href="<?php echo site_url('Login') ?>"><i class="fa fa-phone"></i> Book Appointment</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>