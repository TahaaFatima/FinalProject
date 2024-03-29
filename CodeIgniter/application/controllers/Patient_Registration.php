<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_registration extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }
    public function index(){
        
       
        $this->load->helper('form');
        $this->load->library('form_validation');

            $validation = [
                [
                    'field' => 'Name',
                    'label' => 'name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Age',
                    'label' => 'age',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Gender',
                    'label' => 'gender',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Phone_Number',
                    'label' => 'phone number',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Email_Address',
                    'label' => 'email address',
                    'rules' => 'trim|required|valid_email'
                ],
                [
                    'field' => 'Password',
                    'label' => 'password',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Confirm_Password',
                    'label' => 'confirm password',
                    'rules' => 'trim|required|matches[Password]'
                ]
            ];
        
            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if(isset($_POST['Submit'])){
                if ($this->form_validation->run())
                {
                    $password = password_hash($_POST['Password'],PASSWORD_DEFAULT);
                    $data =[
                        'full_name'         => $_POST['Name'],
                        'age'               => $_POST['Age'],
                        'gender'            => $_POST['Gender'],
                        'phone_number'      => $_POST['Phone_Number'],
                        'email'             => $_POST['Email_Address'],
                        'role_id'           => 2,
                        'password'          => $password
                    ];

                    $this->load->model('patient_registration_model');
                    $result  = $this->patient_registration_model->inserting($data);
                    redirect('login'); 
                }
            }

            $this->data['view']         =   'patient_registration';
            $this->data['site_title']   =   'Revitalize';
            $this->data['page_title']   =   'Patients Registration - '.$this->data['site_title'];
            
            $this->load->view('layout',$this->data);
        }
    }
    
      