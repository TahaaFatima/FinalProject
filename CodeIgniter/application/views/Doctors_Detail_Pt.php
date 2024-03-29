<section class="doc-det-pt-section">
    <div class="container">
    <div class=" mt-2 bg-white padding">
        <div class="doc-12">
            <div class="div-dc-li">
                <?php foreach($doctors as $doctor){?>
                <div class="img-doct">
                <div>
                        <?php 
                            if(!empty($doctor->images)){
                        ?>
                                <img class="profile-image" src="<?php echo "$image_path.$doctor->images" ?>" alt="doctors-profile">
                        <?php
                            }elseif(empty($doctor->images) && $doctor->gender == "female"){
                        ?>
                            <img class="profile-image" src="../assets/images/doctors-profile.png" alt="doctors-profile">
                        <?php
                            }elseif(empty($doctor->images) && $doctor->gender == "male"){
                        ?>
                            <img class="profile-image" src="../assets/images/profile-male.jpg" alt="doctors-profile">
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="doctors-rating">
                        <div id="rateYo-<?php echo $doctor->doctors_id ?>" data-rating="<?php echo isset($ratings[$doctor->doctors_id]['rating']) ? $ratings[$doctor->doctors_id]['rating'] : 0 ; ?>" class="fetch-rating rating">
                        </div>
                    </div>
                </div>
                <div class="doc-info">
                    <div class="pl-4">
                        <h2><?php echo $doctor->full_name?></h2>
                        <p><?php echo $doctor->department?></p>
                        <p><?php echo $doctor->gender?></p>
                        <p><?php echo $doctor->area?></p>
                        <p><?php echo $doctor->email?></p>
                    </div>
                    <div class="appointmnet appointment">
                        <div class="doc-11 doc-12-sm">        
                            <?php 
                                if($this->session->userdata('role_id')){
                            ?>
                                <a href="<?php echo site_url('book-appointment') ?>?Doc_id=<?php echo $doctor->doctors_id?>"><i class="fa fa-phone"></i> Book Appointment</a>											 
                            <?php
                                }else{
                            ?>
                                <a href="<?php echo site_url('login')?>"><i class="fa fa-phone"></i> Book Appointment</a>
                            <?php
                                }
                            ?>                   								
                        </div>
                    </div>
                </div>
                <div class="doc-3">
                    <ul class="grid-list-half pl-4">
                        <li><i class="fa fa-credit-card green-text"></i><?php echo $doctor->price?></li>
                        <li><i class="fa fa-circle"></i><?php echo $doctor->time_in?> - <?php echo $doctor->time_out?></li>
                        <li><i class="fa fa-circle"></i><?php echo $doctor->clinics?></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
            <div class="div-dc-li">
                <div class="review-parent">
                    <div class="Reviews-heading">
                        <h4>Reviews : </h4>
                    </div>
                    <div class="Reviews">
                        <ul class="Reviews-ul">
                            <?php foreach($reviews as $review){
                                foreach($review as $patient_name => $doc_review)
                            ?>
                            <li>
                                <div>
                                    <p class="patient-name-reviews">
                                        <?php echo $patient_name ?> 
                                    </p>
                                    <p class="patient-reviews">
                                        <?php echo $doc_review ?>
                                    </p>
                                </div>
        
                            </li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
