<section class="reg-section">
    <div class="main-heading">
        <h5 class="modal-title text-center text-dark mb-4">EDIT PROFILE</h5>
    </div>
    <div class="reg-form-div">
        <form method="post" class="reg-form">
        <div class="form-group">
            <label class="col-form-label" for="Name">Name</label>
            <input class="form-control" type="text" name="Name" value="<?php echo $doctors_info->full_name; ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Age">Age</label>
            <input class="form-control" type="text" name="Age" value="<?php echo $doctors_info->age; ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Gender">Gender</label>
            <input class="form-radio" type="radio" name="Gender" value="female"> Female
            <input class="form-radio" type="radio" name="Gender" value="male"> Male
        </div>
        <div class="form-group">
            <label class="col-form-label" for="FatherName">Father Name</label>
            <input class="form-control" type="text" name="FatherName" value="<?php echo $doctors_info->father_name; ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Lisence">Lisence Number</label>
            <input class="form-control" type="text" name="Lisence" value="<?php echo $doctors_info->license_no; ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Type">Type</label>
            <input class="form-radio" type="radio" name="Type" value="Medical">Medical 
            <input class="form-radio" type="radio" name="Type" value="Dental">Dental 
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Location">Location</label>
            <select class="form-control"  name="Location">
                <option value="none"><?php echo $doctors_info->area_id; ?></option>
                <?php 
                    foreach($areas as $area)
                    {    
                    ?>
                    <option value="<?php echo $area->area_id ?>"><?php echo $area->area ?></option>
            <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Department">Department</label>
            <select class="form-control" name="Department">
                <option value="none"><?php echo $doctors_info->department_id; ?></option>
                <?php 
                    foreach($departments as $department)
                        { 
                ?>
                        <option value="<?php echo $department->department_id ?>"><?php echo $department->department ?></option>
            <?php
                        }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Clinic">Clinic Name</label>
            <select class="form-control" name="Clinic">
                <option value="none"><?php echo $doctors_info->clinic_id; ?></option>
                <?php 
                    foreach($clinic as $clinics)
                        { 
                ?>
                        <option value="<?php echo $clinics->clinic_id ?>"><?php echo $clinics->clinics?></option>
            <?php
                        }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Price">Price</label>
            <select class="form-control" name="Price">
                <option value="none"><?php echo $doctors_info->price_id; ?></option>
                <?php 
                    foreach($prices as $price)
                        { 
                ?>
                        <option value="<?php echo $price->price_id ?>"><?php echo $price->price ?></option>
                <?php
                        }
                ?>
            </select>
        </div>
        <div class="button-submit">
            <input class="form-control button" type="submit" name="Update" value="Update">
        </div>
    </form>
    </div>
</section>