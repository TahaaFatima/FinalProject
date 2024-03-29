<section class="reg-section">
   <div class="container">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
        </div>
        <div class="reg-form-div">
            <form autocomplete= "off" enctype="multipart/form-data" method="post" class="reg-form">
                <div>
                    <label class="col-form-label" for="Name">Upload Image</label>
                    <input type="file" name="userfile" size="20" /> 
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Name">Name</label>
                    <input class="form-control" type="text" name="Name" value="<?php  echo set_value('Name'); ?>">
                    <?php echo form_error('Name' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Age">Age</label>
                    <input class="form-control" type="text" name="Age" value="<?php echo set_value('Age'); ?>">
                    <?php echo form_error('Age' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Gender">Gender</label>
                    <input class="form-radio" type="radio" name="Gender" value="female" <?php echo isset($_POST['Gender']) && $_POST['Gender'] == "female" ? 'checked="checked"' : ''?>> Female
                    <input class="form-radio" type="radio" name="Gender" value="male" <?php echo isset($_POST['Gender']) && $_POST['Gender'] == "male" ? 'checked="checked"' : ''?>> Male
                    <?php echo form_error('Gender' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="FatherName">Father Name</label>
                    <input class="form-control" type="text" name="FatherName" value="<?php echo set_value('FatherName'); ?>">
                    <?php echo form_error('FatherName' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Lisence">Lisence Number</label>
                    <input class="form-control" type="text" name="Lisence" value="<?php echo set_value('Lisence'); ?>">
                    <?php echo form_error('Lisence' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Type">Type</label>
                    <input class="form-radio" type="radio" name="Type" value="Medical" <?php echo isset($_POST['Type']) && $_POST['Type'] == "Medical" ? 'checked="checked"' : ''?>>Medical 
                    <input class="form-radio" type="radio" name="Type" value="Dental" <?php echo isset($_POST['Type']) && $_POST['Type'] == "Dental" ? 'checked="checked"' : ''?>>Dental 
                    <?php echo form_error('Type' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Location">Location</label>
                    <select class="form-control"  name="Location">
                        <option value="">Choose Area</option>
                        <?php
                            foreach($areas as $area)
                            {    
                        ?>
                            <option value="<?php echo $area->area_id ?>" <?php echo (isset($_POST['Location'] ) && !empty($_POST['Location']) ? ( $_POST['Location'] == $area->area_id ? 'selected="selected"' : '' )    :  '' ) ?> ><?php echo $area->area ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <?php echo form_error('Location', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Department">Department</label>
                    <select class="form-control" name="Department">
                        <option value="">Choose Department</option>
                        <?php 
                            foreach($departments as $department)
                                { 
                        ?>
                                <option value="<?php echo $department->department_id ?>" <?php echo (isset($_POST['Department'] ) && !empty($_POST['Department']) ? ( $_POST['Department'] == $department->department_id ? 'selected="selected"' : '' )    :  '' ) ?> ><?php echo $department->department ?></option>
                        <?php
                                }
                        ?>
                    </select>
                    <?php echo form_error('Department' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Clinic">Clinic Name</label>
                    <select class="form-control" name="Clinic">
                        <option value="">Choose Clinic</option>
                        <?php 
                            foreach($clinic as $clinics)
                                { 
                        ?>

                                <option value="<?php echo $clinics->clinic_id ?>" <?php echo (isset($_POST['Clinic'] ) && !empty($_POST['Clinic']) ? ( $_POST['Clinic'] == $clinics->clinic_id ? 'selected="selected"' : '' )    :  '' ) ?> ><?php echo $clinics->clinics ?></option>
                    <?php
                                }
                        ?>
                    </select>
                    <?php echo form_error('Clinic' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Price">Price</label>
                    <select class="form-control" name="Price">
                    <option value="">Choose Price</option>

                        <?php 
                            foreach($prices as $price)
                                { 
                        ?>

                                <option value="<?php echo $price->price_id ?>" <?php echo (isset($_POST['Price'] ) && !empty($_POST['Price']) ? ( $_POST['Price'] == $price->price_id ? 'selected="selected"' : '' )    :'') ?> ><?php echo $price->price ?></option>
                        <?php
                                }
                        ?>
                    </select>
                    <?php echo form_error('Price' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Time_Picker">Select Your Available Time:</label>
                    <div class="time-slots-div">
                        <label class="col-form-label" for="Time_Picker">From</label>
                        <input class="form-control time-slot timepicker time-form" type="text" name="time_form" >
                        <?php echo form_error('time_form' , '<div class="error">', '</div>'); ?>
                        <label class="col-form-label" for="Time_Picker"> To</label>
                        <input class="form-control time-slot timepicker time-to" type="text" name="time_to">
                        <?php echo form_error('time_to' , '<div class="error">', '</div>'); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Email">Email Address</label>
                    <input class="form-control" type="email" name="Email_Address" value="<?php echo set_value('Email_Address'); ?>">
                    <?php echo form_error('Email_Address' , '<div class="error">', '</div>'); ?>    
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Password">Password</label>
                    <input class="form-control" type="password" name="Password">
                    <?php echo form_error('Password' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Confirm_Password">Confirm Password</label>
                    <input class="form-control" type="password" name="Confirm_Password">
                    <?php echo form_error('Confirm_Password' , '<div class="error">', '</div>'); ?>
                </div>
                <div class="button-submit">
                    <input class="form-control button" type="submit" name="Submit" value="Submit">
                </div>
                <div class="login-link">
                    <span class="login-span">Already on Revitalize ? </span><a href="<?php echo site_url('login') ?>">Log in</a>
                </div>
            </form>
        </div>
   </div>
</section>