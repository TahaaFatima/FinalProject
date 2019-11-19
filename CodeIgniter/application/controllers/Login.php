<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $role_id = $this->session->userdata('role_id');
        if(!empty($role_id)){
            if($role_id == 1){
                redirect('KoiController_Doctor');
            }
            elseif($role_id == 2){
                redirect('KoiController_Patient');
            }
        }
    }

    function index(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $doctor_data = [
            [
                'field' => 'Email_Address',
                'label' => 'email address',
                'rules' => 'required'
            ],
            [
                'field' => 'Password',
                'label' => 'password',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Role',
                'label' => 'Role',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($doctor_data);
        
        if(isset($_POST['submit_login'])){
            if (!$this->form_validation->run())
            {
                $data['view'] = 'Login';
                return $this->load->view('Layout', $data);
            }else{
                if($_POST['Role'] == 'Doctor'){
                    redirect('Doctor_Login');
                }
            }
            
        }

        $data['view'] = 'Login';
        $data['page_title'] = 'Login';
        $this->load->view('Layout', $data);
    }
}

