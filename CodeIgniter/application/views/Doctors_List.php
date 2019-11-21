<div class="container">
    <div class="search-bar">
        <form class="search_form" method="get" action="Search">
            <select class="form-control form-mine search_ing" name="Department">
                <option value="none">Department</option>
                <?php 
                    foreach($departments as $department)
                        { 
                ?>
                <option value="<?php echo $department->department_id ?>"><?php echo $department->department ?></option>
                <?php
                            }
                ?>
                </select>
                <select class="form-control form-mine search_ing"  name="Location">
                    <option value="none">Area</option>
                    <?php 
                        foreach($areas as $area)
                        {    
                        ?>
                        <option value="<?php echo $area->area_id ?>"><?php echo $area->area ?></option>
                <?php
                        }
                    ?>
                </select>
                <select class="form-control form-mine search_ing" name="Price">
                    <option value="none">Price</option>
                    <?php 
                        foreach($prices as $price)
                            { 
                    ?>
                            <option value="<?php echo $price->price_id ?>"><?php echo $price->price ?></option>
                <?php
                            }
                    ?>
                </select>
            <input type="submit" name="submit_search" class="form-control submit_search" value="Search">
        </form>
    </div>
    
    <div class="row py-lg-5">
        <?php
            foreach($doctors as $doctor){
        ?>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3><?php echo $doctor->full_name?></h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                        <img class="profile-picture" src="../assets/images/profile_male.jpg" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div class="rateYo rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3>Doctor's Name</h3>
                    </div>
                    <div class="padding speciality">
                        <h5>Department</h5>
                    </div>
                    <div class="clinic-name">
                        <p>Clinic Name</p>
                    </div>
                    <div class="area">
                        <p>Area</p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div>
                            <a href="#">Book Appointment</a>
                        </div>
                        <div>
                            <a href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>