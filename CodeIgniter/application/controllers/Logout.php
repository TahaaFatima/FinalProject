<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Logout extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $login_in = $this->session->userdata('user_id');
                if(!$login_in){
                    redirect('Login');
                }
       }  

        public function index(){
            $this->data['site_title']   =   'Revitalize';
            $this->data['page_title']   =   'Logout - '.$this->data['site_title'];
            $this->data['view']         =   'Logout';
            $this->load->view('layout', $this->data);
            if(!empty($this->session->userdata('role_id'))){
                $this->session->unset_userdata('role_id');
            }
            redirect('Login');
        }
    }
