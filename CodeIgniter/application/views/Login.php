<?php
    echo $this->session->flashdata('incorrectEmail');
    echo $this->session->flashdata('incorrectPassword');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="fontawesome-all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>login</title>
</head>
<body class="login-body">
<div class="login-bg">
            <div class="login-section">
                <div class="left-section">
                    <div class="left-div">
                        <div class="select-options">
                            <div class="icon-heading">
                                <h3>Login</h3>
                            </div>
                            <div class="img">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="left-div">
                        <div class="select-options" data-toggle="modal" data-toggle="modal" data-target="#exampleModal">
                            <div class="icon-heading">
                                <h3>Register</h3>
                            </div>
                            <div class="img">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-section">
                <h1>Login Here</h1>
                    <!-- <div class="form-div"> -->
                        <form class="reg-form login-form" method="post">
                            <div class="fields-div">
                                <label class="col-form-label" for="Email_Address">Email Address</label>
                                <input class="form-control" type="text" name="Email_Address">
                                <?php echo form_error('Email_Address', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="fields-div">
                                <label class="col-form-label" for="Password">Password</label>
                                <input class="form-control" type="password" name="Password">
                                <?php echo form_error('Password', '<div class="error">', '</div>'); ?>                        
                            </div>
                            <div class="radio-doctor">
                                <input class="user-radio" type="radio" name="Role" value="Doctor" checked="checked"> <label for="Role">Doctor</label>
                                <input class="user-radio" type="radio" name="Role" value="Patient"> <label for="Role">Patient</label>
                                <?php echo form_error('Role', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="login-submit">
                                <input class="form-control button" type="submit" value="Submit" name="submit_login">
                            </div>
                            <div class="login-link login-link-2">
                                <span class="login-span">New on Revitalize ? </span><a href="<?php echo site_url('Login') ?> " data-toggle="modal" data-toggle="modal" data-target="#exampleModal" >Registration</a>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
</div>

</body>
</html>