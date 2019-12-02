<section class="profile-section">
  <div class="container">
  <div class="profile-doctors-details">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">My Profile</h5>
        </div>
        <div class="doctors-my-detals">
            <div class="doctors-detail">
            <?php foreach($doctors_info as $info){
               
               ?>
                <div class="doctors-profile">   
                        <?php 
                            if(!empty($info->images)){   
                        ?>
                                <img class="profile-image" src="<?php echo $image_path.$info->images?>" alt="doctors-profile">
                        <?php
                            }elseif(empty($info->images) && $info->gender == "female"){
                        ?>
                            <img class="profile-image" src="../assets/images/doctors-profile.png" alt="doctors-profile">
                        <?php
                            }elseif(empty($info->images) && $info->gender == "male"){
                        ?>
                            <img class="profile-image" src="../assets/images/profile-male.jpg" alt="doctors-profile">
                        <?php        
                            }
                        ?>
                </div>
                <div>
                    <input id="profile_edit" type="file" name="userfile" size="20" /> 
                </div>
                <div class="doctors-name">
                    <p><?php echo $info->full_name; ?></p>
                </div>
                <div class="rate">
                    <div class="doctors-rating">
                        <div id="rateYo-<?php echo $info->doctors_id ?>" data-rating="<?php echo isset($ratings[$info->doctors_id]['rating']) ? $ratings[$info->doctors_id]['rating'] : 0 ; ?>" class="fetch-rating rating"></div>
                    </div>
                </div>
                <div class="doctors-speciality">
                    <p><?php echo $info->department; ?></p>
                </div>
                <div class="doctors-clinic">
                    <p><?php echo $info->clinics; ?></p>
                </div>
                <div class="doctors-links">
                    <p><a class="appointment-links" href="<?php echo site_url('Doctors-appointments'); ?>">Appointment</a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="<?php echo site_url('Update_doc_profile'); ?>">Edit</a></p>
                </div>
                <div class="doctors-links">
                    <p><a href="<?php echo site_url('Logout'); ?>">Logout</a></p>
                </div>
            </div>
            <div class="reg-form-div">
                <form method="post" class="reg-form reg-detail-pt">
                    <div class="form-group">
                        <label class="col-form-label" for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" value="<?php echo $info->full_name; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Age">Age</label>
                        <input class="form-control" type="text" name="Age" value="<?php echo $info->age; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Gender">Gender</label>
                        <input class="form-control" type="text" name="Gender" value="<?php echo $info->gender; ?>" readonly> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="FatherName">Licence</label>
                        <input class="form-control" type="text" name="FatherName" value="<?php echo $info->license_no; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Lisence">Father Name</label>
                        <input class="form-control" type="text" name="Lisence" value="<?php echo $info->father_name; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Type">Type</label>
                        <input class="form-control" type="text" name="Type" value="<?php echo $info->dr_type; ?>" readonly> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Location">Location</label>
                        <input class="form-control" type="text" name="Location" value="<?php echo $info->area; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Department">Department</label>
                        <input class="form-control" type="text" name="Department" value="<?php echo $info->department; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Price">Price</label>
                        <input class="form-control" type="text" name="Price" value="<?php echo $info->price; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Clinic">Clinic</label>
                        <input class="form-control" type="text" name="Clinic" value="<?php echo $info->clinics; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="Email">Email</label>
                        <input class="form-control" type="email" name="Email_Address" value="<?php echo $info->email; ?>" readonly>
                    </div>
                <?php } ?>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>