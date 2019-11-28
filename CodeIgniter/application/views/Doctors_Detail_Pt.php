<section class="doc-det-pt-section">
    <div class=" mt-2 bg-white padding">
        <div class="doc-12">
            <div class="div-dc-li">
                <?php foreach($doctors as $doctor){?>
                <div class="img-doct">
                    <img class="profile-image" src="<?php echo "../assets/uploads/".$doctor->images?>" alt="doctors-profile">
                </div>
                <div class="doc-info">
                    <div class="pl-4">
                        <h2><?php echo $doctor->full_name?></h2>
                        <p><?php echo $doctor->department?></p>
                        <p><?php echo $doctor->gender?></p>
                        <p><?php echo $doctor->area?></p>
                        <p><?php echo $doctor->email?></p>
                    </div>
                    <div class="appointmnet">
                        <div class="doc-11 doc-12-sm">        
                            <?php 
                                if($this->session->userdata('role_id')){
                            ?>
                                <a href="<?php echo site_url('Book_Appointment') ?>?Doc_id=<?php echo $doctor->doctors_id?>"><i class="fa fa-phone"></i> Book Appointment</a>											 
                            <?php
                                }else{
                            ?>
                                <a href="<?php echo site_url('Login')?>"><i class="fa fa-phone"></i> Book Appointment</a>
                            <?php
                                }
                            ?>                   								
                        </div>
                    </div>
                </div>
                <div class="doc-3">
                    <ul class="grid-list-half pl-4">
                        <li><i class="fa fa-comment"></i> Patient Reviews</li>
                        <li><i class="fa fa-credit-card green-text"></i><?php echo $doctor->price?></li>
                        <li><i class="fa fa-circle"></i> Availability</li>
                        <li><i class="fa fa-circle"></i> Clinic Name</li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
