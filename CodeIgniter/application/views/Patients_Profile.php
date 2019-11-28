<section class="profile-section">
    <div class="main-heading">      
        <h5 class="modal-title text-center text-dark mb-4">MY PROFILE</h5>
    </div>
    <div class="profile-pat">
        <div class="my-details-links">
            <div class="links-heading">
                <div class="head-link">
                    <ul class="ul-pt">
                        <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Patients_Appointment')?>">Appointment</a>
                                </div>
                            </li>
                        </div>
                        <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Department')?>">Book Appointment</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Update_pat_profile'); ?>">Edit</a>
                                </div>
                            </li>
                        </div>
                        <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="<?php echo site_url('Logout'); ?>">Logout</a>
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
                    <div>
                        <label class="col-form-label" for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" value="<?php echo $patients_info->full_name;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Age">Age</label>
                        <input class="form-control" type="text" name="Age" value="<?php echo $patients_info->age;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Gender">Gender</label>
                        <input class="form-control" type="text" name="Gender" value="<?php echo $patients_info->gender;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Phone_Number">Phone Number</label>
                        <input class="form-control" type="number" name="Phone_Number" value="<?php echo $patients_info->phone_number;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Email">Email Address</label>
                        <input class="form-control" type="email" name="Email_Address" value="<?php echo $patients_info->email;  ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>