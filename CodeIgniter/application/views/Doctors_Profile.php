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
                    <p>DOCTORS NAME</p>
                </div>
                <div class="doctors-rating">
                    <div class="rateYo rating"></div>
                </div>
                <div class="doctors-speciality">
                    <p>SPECIALITY</p>
                </div>
                <div class="doctors-clinic">
                    <p>CLINIC NAME</p>
                </div>
                <div class="doctors-links">
                    <p><a href="#">BLA BLA </a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="#">BLA BLA </a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="#">BLA BLA </a></p>
                </div>
            </div>
            <div class="reg-form-div">
                <form method="post" class="reg-form reg-detail-pt">
                    <div class="form-group">
                        <label class="col-form-label" for="Name"><?php var_dump($doctors_info);die; ?></label>
                        <input class="form-control" type="text" name="Name" value="<?php  echo 'Name' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Age">Age</label>
                        <input class="form-control" type="text" name="Age" value="<?php echo 'Age' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Gender">Gender</label>
                        <input class="form-radio" type="radio" name="Gender" value="female"> Female
                        <input class="form-radio" type="radio" name="Gender" value="male"> Male
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="FatherName">Father Name</label>
                        <input class="form-control" type="text" name="FatherName" value="<?php echo 'FatherName' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Lisence">Lisence Number</label>
                        <input class="form-control" type="text" name="Lisence" value="<?php echo 'Lisence' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Type">Type</label>
                        <input class="form-radio" type="radio" name="Type" value="Medical">Medical 
                        <input class="form-radio" type="radio" name="Type" value="Dental">Dental 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Location">Location</label>
                        <input class="form-control" type="text" name="Location" value="<?php echo 'location' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Department">Department</label>
                        <input class="form-control" type="text" name="Department" value="<?php echo 'departments' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Price">Price</label>
                        <input class="form-control" type="text" name="Price" value="<?php echo 'price' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Clinic">Clinic</label>
                        <input class="form-control" type="text" name="Clinic" value="<?php echo 'Clinic' ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Email">Email Address</label>
                        <input class="form-control" type="email" name="Email_Address" value="<?php echo 'Email_Address' ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>