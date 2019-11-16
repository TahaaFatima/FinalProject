<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Registration extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $this->load->helper('form');
        $this->load->library('form_validation');
       /*  // $error = true; */

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
                    'field' => 'FatherName',
                    'label' => 'Father Name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Lisence',
                    'label' => 'Lisence number',
                    'rules' => 'trim|required|max_length[12]'
                ],
                [
                    'field' => 'Type',
                    'label' => 'Type',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Location',
                    'label' => 'Location',
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
            
            if(isset($_POST['Submit'])){
                if (!$this->form_validation->run())
                {
                
                }
                else
                {
                 /*    $error = false; */
                    $password = password_hash($_POST['Password'],PASSWORD_DEFAULT);
                    $data =[
                        'full_name'         => $_POST['Name'],
                        'age'               => $_POST['Age'],
                        'gender'            => $_POST['Gender'],
                        'license_no'        => $_POST['Lisence'],
                        'father_name'       => $_POST['FatherName'],
                        'dr_type'           => $_POST['Type'],
                        'area_id'           => $_POST['Location'],
                        'email'             => $_POST['Email_Address'],
                        'password'          => $password
                    ];

                    $this->load->model('Doctor_registration_model');
                    $result  = $this->Doctor_registration_model->inserting($data);
                   // echo $result;
                }
            }

            $data['view'] = 'Doctors_Registration';
            $data['page_title'] = 'Doctors_Registration';
            $this->load->view('layout',$data);
        }
    }