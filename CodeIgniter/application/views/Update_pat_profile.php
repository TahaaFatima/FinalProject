<section class="reg-section">
    <div class="main-heading">
        <h5 class="modal-title text-center text-dark mb-4">Update Your Profile</h5>
    </div>
    <div class="reg-form-div">
        <form class="reg-form" method="post">
            <div>
                <label class="col-form-label" for="Name">Name</label>
                <input class="form-control" type="text" name="Name" value="<?php echo $patients_info->full_name;  ?>">
            </div>
            <div>
                <label class="col-form-label" for="Age">Age</label>
                <input class="form-control" type="text" name="Age" value="<?php echo $patients_info->age;  ?>">
            </div>
            <div>
                <label class="col-form-label" for="Gender">Gender</label>
                <input class="form-radio" type="radio" name="Gender" value="female">Female
                <input class="form-radio" type="radio" name="Gender" value="male">Male
            </div>
            <div>
                <label class="col-form-label" for="Phone_Number">Phone Number</label>
                <input class="form-control" type="number" name="Phone_Number" value="<?php echo $patients_info->phone_number;  ?>">
            </div>
            <div class="button-submit">
                <input class="form-control button" type="submit" name="edit" value="Edit">
            </div>
        </form>    
    </div>
</section>    