<section class="reg-section">
    <div class="container">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
        </div>
        <div class="reg-form-div">
            <form class="reg-form" method="post">
                
                <div>
                    <label class="col-form-label" for="Name">Name</label>
                    <input class="form-control" type="text" name="Name" value="<?php echo set_value('Name'); ?>">
                    <?php echo form_error('Name', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Age">Age</label>
                    <input class="form-control" type="text" name="Age" value="<?php echo set_value('Age'); ?>">
                    <?php echo form_error('Age', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Gender">Gender</label>
                    <input class="form-radio" type="radio" name="Gender" value="female">Female
                    <input class="form-radio" type="radio" name="Gender" value="male">Male
                    <?php echo form_error('Gender', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Phone_Number">Phone Number</label>
                    <input class="form-control" type="number" name="Phone_Number" value="<?php echo set_value('Phone_Number'); ?>">
                    <?php echo form_error('Phone_Number', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Email">Email Address</label>
                    <input class="form-control" type="email" name="Email_Address" value="<?php echo set_value('Email_Address'); ?>">
                    <?php echo form_error('Email_Address', '<div class="error">', '</div>'); ?>    
                </div>
                <div>
                    <label class="col-form-label" for="Password">Password</label>
                    <input class="form-control" type="password" name="Password" value="<?php echo set_value('Password'); ?>">
                    <?php echo form_error('Password', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label class="col-form-label" for="Confirm_Password">Confirm Password</label>
                    <input class="form-control" type="password" name="Confirm_Password" value="<?php echo set_value('Confirm_Password'); ?>">
                    <?php echo form_error('Confirm_Password', '<div class="error">', '</div>'); ?>
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