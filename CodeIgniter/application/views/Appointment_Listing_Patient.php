<section class="profile-section">
    <div class="main-heading">      
        <h5 class="modal-title text-center text-dark mb-4">MY APPOINTMENTS</h5>
    </div>
    <div class="profile-pat">
        <div class="my-details-links">
            <div class="links-heading">
                <div class="head-link">
                    <ul class="ul-pt">
                        <div class="li-div-pt">
                            <li class="li-appt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Appointment_Listing_Completed')?>">Completed</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-appt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Appointment_Listing_Patient')?>">Due Today</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-appt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Appointment_Listing_Patient')?>">To Attend</a>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-details">
            <div class="reg-form-div">
                <form class="reg-form form-patient-pro" method="post">
                    <h6 class="">APPOINTMENT : </h6>
                    <div>
                        <label class="col-form-label" for="Doctor-Name">Doctor's Name</label>
                        <input class="form-control" type="text" name="Doctor_Name" value="" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Clinic_Name">Clinic Name</label>
                        <input class="form-control" type="text" name="Clinic_Name" value="" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Time">Time</label>
                        <input class="form-control" type="text" name="Time" value="" readonly>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>