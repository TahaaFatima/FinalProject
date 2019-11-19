<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_Login extends MY_Controller {
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
            ]
        ];

        $this->form_validation->set_rules($doctor_data);
        
        if(isset($_POST['submit_login'])){
            if (!$this->form_validation->run())
            {
                $data['view'] = 'Login';
                return $this->load->view('Layout', $data);
            }else{
                $this->load->model('User_Model');
                $this->User_Model->table_name = 'doctors_registration';
                $email_address = $_POST['Email_Address'];
                $where = ['email' => $email_address];
                $dr_data = $this->User_Model->retrieving($where);
                
                if(count($dr_data) > 0){
                    if(password_verify($_POST['Password'],$dr_data[0]->password)){
                        $this->session->set_userdata('role_id', $dr_data[0]->role_id);
                        $this->session->set_flashdata('signed_in','Sign In Successful');
                        $this->session->set_userdata('emailAddress', $email_address);
                        redirect('KoiController_Doctor');
                    }else{
                        $this->session->set_flashdata('incorrectPassword','Incorrect Password');
                    }
                }else{
                    $this->session->set_flashdata('incorrectEmail','Incorrect Email Address');
                }
            }
            
        }

        $data['view'] = 'Login';
        $data['page_title'] = 'Login';
        $this->load->view('Layout', $data);
    }
}

