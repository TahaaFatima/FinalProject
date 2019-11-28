<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Logout extends MY_Controller{
        public function index(){
            $this->data['page_title'] = 'Logout';
            $this->data['view'] = 'Logout';
            $this->load->view('layout', $this->data);
            if(!empty($this->session->userdata('role_id'))){
                $this->session->unset_userdata('role_id');
            }
            redirect('Login');
        }
    }
