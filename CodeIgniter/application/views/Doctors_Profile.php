<section class="profile-section">
    <div class="profile-doctors-details">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">My Profile</h5>
        </div>
        <div class="doctors-my-detals">
            <div class="doctors-detail">
                <div class="doctors-profile">
                    <img src="../assets/images/doctors-profile.png" alt="doctors-profile">
                </div>
                <div class="doctors-name">
                    <p><?php echo $doctors_info->full_name; ?></p>
                </div>
                <div class="doctors-rating">
                    <div class="rateYo rating"></div>
                </div>
                <div class="doctors-speciality">
                    <p><?php echo $doctors_info->department_id; ?></p>
                </div>
                <div class="doctors-clinic">
                    <p><?php // echo $doctors_info->clinic_id; ?></p>
                </div>
                <div class="doctors-links">
                    <p><a href="#">BLA BLA </a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="#">BLA BLA </a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="<?php echo site_url('Update_doc_profile'); ?>">Edit</a></p>
                </div>
            </div>
            <div class="reg-form-div">
                <form method="post" class="reg-form reg-detail-pt">
                    <div class="form-group">
                        <label class="col-form-label" for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" value="<?php echo $doctors_info->full_name; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Age">Age</label>
                        <input class="form-control" type="text" name="Age" value="<?php echo $doctors_info->age; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Gender">Gender</label>
                        <input class="form-control" type="text" name="Gender" value="<?php echo $doctors_info->gender; ?>" readonly> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="FatherName">Licence</label>
                        <input class="form-control" type="text" name="FatherName" value="<?php echo $doctors_info->license_no; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Lisence">Father Name</label>
                        <input class="form-control" type="text" name="Lisence" value="<?php echo $doctors_info->father_name; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Type">Type</label>
                        <input class="form-control" type="text" name="Type" value="<?php echo $doctors_info->dr_type; ?>" readonly> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Location">Location</label>
                        <input class="form-control" type="text" name="Location" value="<?php echo $doctors_info->area_id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Department">Department</label>
                        <input class="form-control" type="text" name="Department" value="<?php echo $doctors_info->department_id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Price">Price</label>
                        <input class="form-control" type="text" name="Price" value="<?php echo $doctors_info->price_id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Clinic">Clinic</label>
                        <input class="form-control" type="text" name="Clinic" value="<?php echo $doctors_info->price_id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Email">Email</label>
                        <input class="form-control" type="email" name="Email_Address" value="<?php echo $doctors_info->email; ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>