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
            <input class="form-radio" type="radio" name="Gender" value="female" <?php echo (isset($_POST['Gender'] ) && !empty($_POST['Gender']) ? ( $_POST['Gender'] == "female" ? 'checked="checked"' : '' )    :  ( $doctors_info->gender == "female" ? 'checked="checked"' : '' )  ) ?> > Female
            <input class="form-radio" type="radio" name="Gender" value="male" <?php echo (isset($_POST['Gender'] ) && !empty($_POST['Gender']) ? ( $_POST['Gender'] == "male" ? 'checked="checked"' : '' )    :  ( $doctors_info->gender == "male" ? 'checked="checked"' : '' )  ) ?>> Male
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

            <input class="form-radio" type="radio" name="Type" value="Medical" <?php echo (isset($_POST['Type'] ) && !empty($_POST['Type']) ? ( $_POST['Type'] == "Medical" ? 'checked="checked"' : '' )    :  ( $doctors_info->dr_type == "Medical" ? 'checked="checked"' : '' )  ) ?> >Medical

            <input class="form-radio" type="radio" name="Type" value="Dental" <?php echo (isset($_POST['Type'] ) && !empty($_POST['Type']) ? ( $_POST['Type'] == "Dental" ? 'checked="checked"' : '' )    :  ( $doctors_info->dr_type == "Dental" ? 'checked="checked"' : '' )  ) ?>>Dental 
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Location">Location</label>
            <select class="form-control"  name="Location">
                <?php 
                    foreach($areas as $area)
                    {    ?>
                    <option value="<?php echo $area->area_id ?>" <?php echo (isset($_POST['Location'] ) && !empty($_POST['Location']) ? ( $_POST['Location'] == $area->area_id ? 'selected="selected"' : '' )    :  ( $doctors_info->area_id == $area->area_id ? 'selected="selected"' : '' )  ) ?> ><?php echo $area->area ?></option>
            <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Department">Department</label>
            <select class="form-control" name="Department">
                <?php 
                    foreach($departments as $department)
                        { 
                ?>
                  <option value="<?php echo $department->department_id ?>" <?php echo (isset($_POST['Department'] ) && !empty($_POST['Department']) ? ( $_POST['Department'] == $department->department_id ? 'selected="selected"' : '' )    :  ( $doctors_info->department_id == $department->department_id ? 'selected="selected"' : '' )  ) ?> ><?php echo $department->department ?></option>

            <?php
                        }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Clinic">Clinic Name</label>
            <select class="form-control" name="Clinic">
                <?php 
                    foreach($clinic as $clinics)
                        { 
                ?>      
                        <option value="<?php echo $clinics->clinic_id ?>" <?php echo (isset($_POST['Clinic'] ) && !empty($_POST['Clinic']) ? ( $_POST['Clinic'] == $clinics->clinic_id ? 'selected="selected"' : '' )    :  ( $doctors_info->clinic_id == $clinics->clinic_id ? 'selected="selected"' : '' )  ) ?> ><?php echo $clinics->clinics ?></option>
            <?php
                        }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Price">Price</label>
            <select class="form-control" name="Price">
                <?php 
                    foreach($prices as $price)
                        { 
                ?>
                        <option value="<?php echo $price->price_id ?>" <?php echo (isset($_POST['Price'] ) && !empty($_POST['Price']) ? ( $_POST['Price'] == $price->price_id ? 'selected="selected"' : '' )    :  ( $doctors_info->price_id == $price->price_id ? 'selected="selected"' : '' )  ) ?> ><?php echo $price->price ?></option>
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