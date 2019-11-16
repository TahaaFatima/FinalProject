<form method="post">
    <div>
        <label for="Name">Name</label>
        <input type="text" name="Name" value="<?php  echo set_value('Name'); ?>">
        <?php echo form_error('Name'); ?>
    </div>
    <div>
        <label for="Age">Age</label>
        <input type="text" name="Age" value="<?php echo set_value('Age'); ?>">
        <?php echo form_error('Age'); ?>
    </div>
    <div>
        <label for="Gender">Gender</label>
        <input type="radio" name="Gender" value="female">Female
        <input type="radio" name="Gender" value="male">Male
        <?php echo form_error('Gender'); ?>
    </div>
    <div>
        <label for="FatherName">Father Name</label>
        <input type="text" name="FatherName" value="<?php echo set_value('FatherName'); ?>">
        <?php echo form_error('FatherName'); ?>
    </div>
    <div>
        <label for="Lisence">Lisence Number</label>
        <input type="text" name="Lisence" value="<?php echo set_value('Lisence'); ?>">
        <?php echo form_error('Lisence'); ?>
    </div>
    <div>
        <label for="Type">Type</label>
        <input type="radio" name="Type" value="Medical">Medical 
        <input type="radio" name="Type" value="Dental">Dental 
        <?php echo form_error('Type'); ?>
    </div>
    <div>
        <label for="Location">Location</label>
        <input type="text" name="Location" value="<?php echo set_value('Location'); ?>">
        <?php echo form_error('Location'); ?>
    </div>
    <div>
        <label for="Email">Email Address</label>
        <input type="email" name="Email_Address" value="<?php echo set_value('Email_Address'); ?>">
        <?php echo form_error('Email_Address'); ?>    
    </div>
    <div>
        <label for="Password">Password</label>
        <input type="password" name="Password" value="<?php echo set_value('Password'); ?>">
        <?php echo form_error('Password'); ?>
    </div>
    <div>
        <label for="Confirm_Password">Confirm Password</label>
        <input type="password" name="Confirm_Password" value="<?php echo set_value('Confirm_Password'); ?>">
        <?php echo form_error('Confirm_Password'); ?>
    </div>
    <div>
        <input type="submit" name="Submit" value="Submit">
    </div>
</form>
<a href="<?php echo site_url('Login') ?>">Log in</a>