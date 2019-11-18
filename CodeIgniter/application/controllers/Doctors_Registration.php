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
                    'rules' => 'required'
                ],
                [
                    'field' => 'Location',
                    'label' => 'Location',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Department',
                    'label' => 'Department',
                    'rules' => 'required'
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
                        'department_id'     => $_POST['Department'],
                        'email'             => $_POST['Email_Address'],
                        'password'          => $password
                    ];

                    $this->load->model('Doctor_registration_model');
                    $result  = $this->Doctor_registration_model->inserting($data);
                   // echo $result;
                }

                // function select_validate($abcd){
                // // 'none' is the first option that is default "-------Choose City-------"
                //     if($abcd=="none"){
                //         $this->form_validation->set_message('select_validate', 'Please Select Your City.');
                //     return false;
                //     }
                //     else{
                //         // User picked something.
                //         return true;
                //     }
                // }

            }

            $this->load->model('Get_Area');
            $area_ids = [];
            $area_table = $this->Get_Area->retrieving();
             
            $this->load->model('Get_Department');
            $department_ids = [];
            $department_table = $this->Get_Department->retrieving();
            foreach($department_table as $object){
                $department_ids[] = $object->department_id;
            }

            $data['view'] = 'Doctors_Registration';
            $data['page_title'] = 'Doctors_Registration';
            $data['areas'] = $area_table;
            $data['department_ids'] = $department_ids;
            $this->load->view('layout',$data);
        }
    }