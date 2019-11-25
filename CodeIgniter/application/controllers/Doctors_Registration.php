<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doctors_Registration extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->load->model('Area_Model');
        $area_table = $this->Area_Model->retrieving();

        $this->load->model('Department_Model');
        $department_table = $this->Department_Model->retrieving();

        $this->load->model('Clinic_Model');
        $clinic_table = $this->Clinic_Model->retrieving();

        $this->load->model('Price_Model');
        $price_table = $this->Price_Model->retrieving();

        $data['view']        = 'Doctors_Registration';
        $data['page_title']  = 'Doctors_Registration';
        $data['areas']       = $area_table;
        $data['departments'] = $department_table;
        $data['clinic']      = $clinic_table;
        $data['prices']      = $price_table;
        
        if (isset($_POST['Submit'])) {

            $validation = [
                [
                    'field' => 'Name',
                    'label' => 'name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Age',
                    'label' => 'age',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Gender',
                    'label' => 'gender',
                    'rules' => 'required'
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
                    'field' => 'Clinic',
                    'label' => 'Clinic',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Price',
                    'label' => 'Price',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_form',
                    'label' => 'Time From',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_to',
                    'label' => 'Time To',
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
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if (!$this->form_validation->run()) {
                $data['view'] = 'Doctors_Registration';
                $data['page_title'] = 'Doctors_Registration';
                return $this->load->view('layout', $data);
            } else {
                $this->load->model('Doctor_registration_model');
                $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

                $data = [
                    'full_name'         => $_POST['Name'],
                    'age'               => $_POST['Age'],
                    'gender'            => $_POST['Gender'],
                    'license_no'        => $_POST['Lisence'],
                    'father_name'       => $_POST['FatherName'],
                    'dr_type'           => $_POST['Type'],
                    'area_id'           => $_POST['Location'],
                    'department_id'     => $_POST['Department'],
                    'clinic_id'         => $_POST['Clinic'],
                    'price_id'          => $_POST['Price'],
                    'role_id'           => 1,
                    'email'             => $_POST['Email_Address'],
                    'password'          => $password
                ];
                $result  = $this->Doctor_registration_model->inserting($data);
                $this->load->model('Doctor_Timeslot_Model');
                $time_data = [
                    'doctors_id' => $result,
                    'time_in' => $_POST['time_form'],
                    'time_out' => $_POST['time_to']
                ];
                $this->Doctor_Timeslot_Model->inserting($time_data);
                redirect('Login');
            }
        }


        $this->load->view('layout', $data);
    }
}
