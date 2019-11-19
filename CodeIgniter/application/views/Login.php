<?php
    echo $this->session->flashdata('incorrectEmail');
    echo $this->session->flashdata('incorrectPassword');
?>
<form method="post">
    <div>
        <label for="Email_Address">Email Address</label>
        <input type="text" name="Email_Address">
        <?php echo form_error('Email_Address'); ?>
    </div>
    <div>
        <label for="Password">Password</label>
        <input type="text" name="Password">
        <?php echo form_error('Password'); ?>
    </div>
    <div>
        <input type="radio" name="Role" value="Doctor"> Doctor
        <input type="radio" name="Role" value="Patient"> Patient
    </div>
    <div>
        <input type="submit" value="Submit" name="submit_login">
    </div>
</form>