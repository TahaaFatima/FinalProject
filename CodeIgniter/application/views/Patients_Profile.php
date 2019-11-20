<section class="profile-section">
    <div class="my-details">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">MY PROFILE</h5>
        </div>
        <div class="reg-form-div">
            <form class="reg-form" method="post">
                <div>
                    <label class="col-form-label" for="Name">Name</label>
                    <input class="form-control" type="text" name="Name" value="<?php echo 'Name' ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="Age">Age</label>
                    <input class="form-control" type="text" name="Age" value="<?php echo 'Age' ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="Gender">Gender</label>
                    <input class="form-radio" type="radio" name="Gender" value="female" readonly>Female
                    <input class="form-radio" type="radio" name="Gender" value="male" readonly>Male
                </div>
                <div>
                    <label class="col-form-label" for="Phone_Number">Phone Number</label>
                    <input class="form-control" type="number" name="Phone_Number" value="<?php echo '01254784' ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="Email">Email Address</label>
                    <input class="form-control" type="email" name="Email_Address" value="<?php echo 'Email_Address' ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="Password">Password</label>
                    <input class="form-control" type="password" name="Password" value="<?php echo 'Password' ?>" readonly>
                </div>
            </form>
        </div>
    </div>
</section>