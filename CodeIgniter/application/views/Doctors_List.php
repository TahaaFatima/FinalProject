<div class="container">
    <div class="search-bar">
        <form class="search_form" >
            <select class="form-control form-mine" name="departmentSelector">
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
                        <option <?php echo isset($_GET['Location']) && $_GET['Location'] == $area->area_id ? 'selected':'';?> value="<?php echo $area->area_id ?>"><?php echo $area->area ?></option>

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
                        <option <?php echo isset($_GET['Price']) && $_GET['Price'] == $price->price_id ? 'selected':'';?> value="<?php echo $price->price_id ?>"><?php echo $price->price ?></option>
                    <?php
                            }
                    ?>
                </select>
                <select class="form-control form-mine" name="Clinic">
                    <option value="none">Clinic</option>
                    <?php 
                        foreach($clinics as $clinic)
                            { 
                    ?>
                        <option <?php echo isset($_GET['Clinic']) && $_GET['Clinic'] == $clinic->clinic_id ? 'selected':'';?> value="<?php echo $clinic->clinic_id ?>"><?php echo $clinic->clinics ?></option>
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
                        <img class="profile-image" src="<?php echo "../assets/uploads/".$doctor->images?>" alt="profile-picture">
                    </div>
                    <div class="rating-star">
                        <div id="rateYo-<?php echo $doctor->doctors_id ?>" data-rating="<?php echo isset($ratings[$doctor->doctors_id]['rating']) ? $ratings[$doctor->doctors_id]['rating'] : 0 ; ?>" class="fetch-rating rating"></div>
                    </div>
                    <div class="padding doc-name">
                        <h3><?php echo $doctor->full_name?></h3>
                    </div>
                    <div class="padding speciality">
                        <h5><?php echo $doctor->department?></h5>
                    </div>
                    <div class="clinic-name">
                        <p><?php echo $doctor->clinics ?></p>
                    </div>
                    <div class="area">
                        <p><?php echo $doctor->area?></p>
                    </div>

                    <div>
                        <p><?php echo $doctor->time_in.' - '.$doctor->time_out ?></p>
                    </div>
                    <div class="price">
                        <p><?php echo $doctor->price?></p>
                    </div>
                    <div class="selection">
                        <div class="appointmnet">
                        <div class="list-appt">        
                            <?php 
                                if($this->session->userdata('role_id')){
                            ?>
                                <a class="b-appt" href="<?php echo site_url('Book_Appointment')?>?Doc_id=<?php echo $doctor->doctors_id?>"><i class="list-pg fa fa-phone"></i> Book Appointment</a>											 
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
                            <a class="b-appt" href="<?php echo site_url('Doctors_Detail_Pt')?>?Doc_id=<?php echo $doctor->doctors_id?>">View Doctor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
    </div>
</div>