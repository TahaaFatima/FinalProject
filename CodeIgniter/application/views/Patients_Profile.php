<section class="profile-section">
   <div class="container">
    <div class="main-heading">      
            <h5 class="modal-title text-center text-dark mb-4">MY PROFILE</h5>
        </div>
        <div class="profile-pat">
            <div class="my-details-links">
                <div class="links-heading">
                    <div class="head-link">
                        <ul class="ul-pt">

                                <li class="li-div-pt li-pt">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('patients-appointment')?>">Appointment</a>
                                    </div>
                                </li>

                                <li class="li-div-pt li-pt app-book-li">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('department')?>">Book Appointment</a>
                                    </div>
                                </li>

                                <li class="li-div-pt li-pt">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('update-profile'); ?>">Edit</a>
                                    </div>
                                </li>

                                <li class="li-div-pt li-pt">
                                    <div class="li-a-div-pt">
                                        <a href="<?php echo site_url('logout'); ?>">Logout</a>
                                    </div>
                                </li>
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
   </div>
</section>