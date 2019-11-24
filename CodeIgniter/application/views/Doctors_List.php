<div class="container">
    <div class="search-bar">
        <form class="search_form" method="post" action="Search">
            <select class="form-control form-mine" name="Department">
                <option value="none">Department</option>
                <?php 
                    foreach($departments as $department)
                        { 
                ?>
                <option <?php echo isset($_GET['departmentSelector']) && $_GET['departmentSelector'] == $department->department_id ? 'selected':'';?> value="<?php echo $department->department_id ?>"><?php echo $department->department ?></option>
                <?php
                            }
                ?>
                </select>
                <select class="form-control form-mine"  name="Location">
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
                <select class="form-control form-mine" name="Price">
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
                        <h5><?php echo $doctor->department?></h5>
                    </div>
                    <!-- <div class="clinic-name">
                        <p><?php echo $doctor->clinic?></p>
                    </div> -->
                    <div class="area">
                        <p><?php echo $doctor->area?></p>
                    </div>
                    <div>
                        <p>Time Slot</p>
                    </div>
                    <div class="selection">
                        <div class="appointmnet">
                        <div class="list-appt">        
                            <?php 
                                if($this->session->userdata('role_id')){
                            ?>
                                <a class="b-appt" href="#"><i class="list-pg fa fa-phone"></i> Book Appointment</a>											 
                            <?php
                                }else{
                            ?>
                                <a class="b-appt" href="<?php echo site_url('Login')?>"><i class="list-pg fa fa-phone"></i> Book Appointment</a>
                            <?php
                                }
                            ?>                   								
                        </div>
                    </div>
                        <div class="to-view-doc">
                            <a class="b-appt" href="#">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
    </div>
</div>