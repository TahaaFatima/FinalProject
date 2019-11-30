<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <div class="revitalize-logo">
                    <h2>REVITALIZE</h2>
                </div>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href=<?php echo site_url('/Home'); ?>>Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href=<?php echo site_url('/Department'); ?>>Departments</a>
                        </li>
                        <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                How it works
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('/For_Doctor'); ?>">For Doctors</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('/For_Patient'); ?>">For Patients</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo site_url('/Contact_Us'); ?>>Contact</a>
                        </li>
                        <?php
                            if($this->session->userdata('role_id')){
                        ?>
                            <li>
                                <a href="<?php echo site_url('/Logout')?>" type="button" class="btn  ml-lg-2 w3ls-btn">
                                    Logout</a>
                            </li>
                            <li>
                                <a href="<?php echo ($this->session->userdata('role_id') == 1) ? site_url('/Doctors_Profile') : ($this->session->userdata('role_id') == 2) ? site_url('/Patients_Profile') : "" ;?>"><img class="navbar-img" src="../assets/images/doctors-profile.png" alt="profile"></a>
                                    
                            </li>

                        <?php           
                            }else{
                        ?>
                            <li>
                                <a href="<?php echo site_url('/Login')?>" type="button" class="btn  ml-lg-2 w3ls-btn">
                                    Login</a>
                            </li>
                            <li>
                                <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                                    Sign Up
                                </button>
                            </li>
                        <?php
                            }
                        ?>
                        <?php 
                                if($this->session->userdata('role_id') == 1 ){
                        ?>
                            <li>
                                <h3 class="pt-Or-doc">Hi Doctor!!</h3>
                            </li>
                        <?php 
                                }else if($this->session->userdata('role_id') == 2){
                        ?>  
                            <li>
                                <h3 class="pt-Or-doc">Hi Patient!!</h3>
                            </li>
                        <?php 
                            }
                        ?>
                    </ul>
                </div>
            </nav>