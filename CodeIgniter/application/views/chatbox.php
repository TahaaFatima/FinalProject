<div class="container">
    <?php
    if($this->session->userdata('role_id') == 2){
        foreach($doctors_details as $doctor){
    ?>
        <div class="col-sm-4 w3-ab">
            <div class="w3-ab-grid text-center">
                <div class="w3-aicon p-4">
                    <div>
                    <?php 
                            if(!empty($doctor->images)){
                        ?>
                                <img class="profile-image" src="<?php echo "$image_path$doctor->images" ?>" alt="doctors-profile">
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
                    <div class="price">
                        <p><?php echo $doctor->price?></p>
                    </div>
                
                    </div>
                </div>
            </div>
        </div>
            <?php }
            }else if($this->session->userdata('role_id') == 1){
                    ?>
                        <div class="col-sm-4 w3-ab">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                   <div class="padding doc-name">
                                        <h3><?php echo $patients_details->full_name?></h3>
                                    </div>
                                    <div class="padding speciality">
                                        <h5><?php echo $patients_details->age?></h5>
                                    </div>
                                    <div class="clinic-name">
                                        <p><?php echo $patients_details->gender ?></p>
                                    </div>
                                    <div class="area">
                                        <p><?php echo $patients_details->email?></p>
                                    </div>
                                    <div class="price">
                                        <p><?php echo $patients_details->phone_number?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="chat-heading">Chat Window</h1>
            <div class="chatbox">   
                <ul class="chatbox-listing">
                </ul>
                <div class="chatarea">
                    <form method="post">
                            <div class="view">
                                <div class="col-80">
                                        <input  name="user_id" class="user-id" value="<?php echo $user_id?>" class="chat-message-text" type="hidden"> 
                                    <input class="form-control" name="message" class="chat-message-text" type="text"> 
                                </div>
                                <div class="col-20">
                                    <input class="btn btn-danger send" type="button" name="send" value="send">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>