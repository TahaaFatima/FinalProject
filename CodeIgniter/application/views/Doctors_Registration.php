<section class="reg-section">
    <div class="main-heading">
        <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
    </div>
    <div class="reg-form-div">
        <form method="post" class="reg-form">
        <div class="form-group">
            <label class="col-form-label" for="Name">Name</label>
            <input class="form-control" type="text" name="Name" value="<?php  echo set_value('Name'); ?>">
            <?php echo form_error('Name'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Age">Age</label>
            <input class="form-control" type="text" name="Age" value="<?php echo set_value('Age'); ?>">
            <?php echo form_error('Age'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Gender">Gender</label>
            <input class="form-radio" type="radio" name="Gender" value="female"> Female
            <input class="form-radio" type="radio" name="Gender" value="male"> Male
            <?php echo form_error('Gender'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="FatherName">Father Name</label>
            <input class="form-control" type="text" name="FatherName" value="<?php echo set_value('FatherName'); ?>">
            <?php echo form_error('FatherName'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Lisence">Lisence Number</label>
            <input class="form-control" type="text" name="Lisence" value="<?php echo set_value('Lisence'); ?>">
            <?php echo form_error('Lisence'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Type">Type</label>
            <input class="form-radio" type="radio" name="Type" value="Medical">Medical 
            <input class="form-radio" type="radio" name="Type" value="Dental">Dental 
            <?php echo form_error('Type'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Location">Location</label>
            <select class="form-control"  name="Location">
                <option value="none">Choose City</option>
                <?php 
                    foreach($areas as $area)
                    {    
                    ?>
                    <option value="<?php echo $area->area_id ?>"><?php echo $area->area ?></option>
            <?php
                    }
                ?>
            </select>
            <?php echo form_error('Location'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Department">Department</label>
            <select class="form-control" name="Department">
                <option value="none">Choose Department</option>
                <?php 
                    foreach($department_ids as $departments)
                        { 
                ?>
                        <option value="<?php echo $departments->department_id ?>"><?php echo $departments->department ?></option>
            <?php
                        }
                ?>
            </select>
            <?php echo form_error('Department'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Email">Email Address</label>
            <input class="form-control" type="email" name="Email_Address" value="<?php echo set_value('Email_Address'); ?>">
            <?php echo form_error('Email_Address'); ?>    
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Password">Password</label>
            <input class="form-control" type="password" name="Password" value="<?php echo set_value('Password'); ?>">
            <?php echo form_error('Password'); ?>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="Confirm_Password">Confirm Password</label>
            <input class="form-control" type="password" name="Confirm_Password" value="<?php echo set_value('Confirm_Password'); ?>">
            <?php echo form_error('Confirm_Password'); ?>
        </div>
        <div class="button-submit">
            <input class="form-control button" type="submit" name="Submit" value="Submit">
        </div>
    </form>
    </div>
    <div class="reg-form-div">
        <a href="<?php echo site_url('Login_View') ?>">Log in</a>
    </div>
</section>