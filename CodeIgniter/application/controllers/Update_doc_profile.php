<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_doc_profile extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('login');
        }
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 2) {
                redirect('patients-profile');
            }
        }
    }
    public function index(){

        $doctors_id  = $this->session->userdata('user_id');
        $where = ['doctors_id' => $doctors_id];
        $this->load->model('doctor_registration_model');
        $doc_info = $this->doctor_registration_model->retrieving($where, false);



        if(isset($_POST['Update'])){
            
                $record_doc =[
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
                ];
 
                $this->load->model('doctor_registration_model');
                $this->doctor_registration_model->updating ( $record_doc  ,$where );
                redirect('doctors-profile');
            }

        $this->load->model('area_model');
        $area_table = $this->area_model->retrieving();
            
        $this->load->model('department_model');
        $department_table = $this->department_model->retrieving();

        $this->load->model('clinic_model');
        $clinic_table = $this->clinic_model->retrieving();

        $this->load->model('price_model');
        $price_table = $this->price_model->retrieving();

        $this->data['doctors_info'] =   $doc_info;
        $this->data['areas']        =   $area_table;
        $this->data['departments']  =   $department_table;
        $this->data['clinic']       =   $clinic_table;
        $this->data['prices']       =   $price_table;
        $this->data['site_title']   =   'Revitalize';
        $this->data['page_title']   =   'Edit Doctors Profile - '.$this->data['site_title'];
        $this->data['view']         =   'update_doc_profile';
            
        $this->load->view('layout',$this->data);

    }
}
