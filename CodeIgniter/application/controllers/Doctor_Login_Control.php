<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_Login_Control extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        // $this->pt_id = $this->session->userdata('pt_id');
        // if(!empty($this->pt_id)){
        //     redirect('chatbox');
        // }
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
                $data['view'] = 'Login_View';
                return $this->load->view('Layout', $data);
            }else{
                $this->load->model('User_Model');
                $this->User_Model->table_name = 'doctors_registration';
                $email_address = $_POST['Email_Address'];
                $where = ['email' => $email_address];
                $dr_data = $this->User_Model->retrieving($where);
                //var_dump($dr_data);die;
                
                if(count($dr_data) > 0){
                    if(password_verify($_POST['Password'],$dr_data[0]->password)){
                        $this->session->set_userdata('dr_id', $dr_data[0]->doctors_id);
                        $this->session->set_flashdata('signed_in','Sign In Successful');
                        $this->session->set_userdata('emailAddress', $email_address);
                        redirect('KoiController');
                    }else{
                        $this->session->set_flashdata('incorrectPassword','Incorrect Password');
                    }
                }else{
                    $this->session->set_flashdata('incorrectEmail','Incorrect Email Address');
                }
            }
            
        }

        $data['view'] = 'Login_View';
        $this->load->view('Layout', $data);
    }
}

