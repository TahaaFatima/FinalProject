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
                                    <a href="#">Appointment</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="#">WHAT EVER</a>
                                </div>
                            </li>
                        </div>
                         <div class="li-div-pt">
                            <li class="li-pt">
                                <div class="li-a-div-pt">
                                    <a href="#">BLAA BLAA</a>
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
                        <input class="form-control" type="text" name="Age" value="<?php echo $patients_info->full_name;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Gender">Gender</label>
                        <input class="form-radio" type="radio" name="Gender" value="female" readonly>Female
                        <input class="form-radio" type="radio" name="Gender" value="male" readonly>Male
                    </div>
                    <div>
                        <label class="col-form-label" for="Phone_Number">Phone Number</label>
                        <input class="form-control" type="number" name="Phone_Number" value="<?php echo $patients_info->full_name;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Email">Email Address</label>
                        <input class="form-control" type="email" name="Email_Address" value="<?php echo $patients_info->full_name;  ?>" readonly>
                    </div>
                    <div>
                        <label class="col-form-label" for="Password">Password</label>
                        <input class="form-control" type="password" name="Password" value="<?php echo $patients_info->full_name;  ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="logout">logout</a>
</section>