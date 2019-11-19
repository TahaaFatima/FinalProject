<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Logout extends MY_Controller{
        public function index(){
            $data['page_title'] = 'Logout';
            $data['view'] = 'Logout';
            $this->load->view('layout', $data);
            if(!empty($this->session->userdata('role_id'))){
                $this->session->unset_userdata('role_id');
            }
            redirect('Login');
        }
    }
