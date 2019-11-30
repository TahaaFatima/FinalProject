<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_doc_profile extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('Login');
        }
    }
    public function index(){

        $doctors_id  = $this->session->userdata('user_id');
        $where = ['doctors_id' => $doctors_id];
        $this->load->model('Doctor_registration_model');
        $doc_info = $this->Doctor_registration_model->retrieving($where, false);



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
 
                $this->load->model('Doctor_registration_model');
                $this->Doctor_registration_model->updating ( $record_doc  ,$where );
                redirect('Doctors_Profile');
            }

        $this->load->model('Area_Model');
        $area_table = $this->Area_Model->retrieving();
            
        $this->load->model('Department_Model');
        $department_table = $this->Department_Model->retrieving();

        $this->load->model('Clinic_Model');
        $clinic_table = $this->Clinic_Model->retrieving();

        $this->load->model('Price_Model');
        $price_table = $this->Price_Model->retrieving();

        $this->data['doctors_info'] =   $doc_info;
        $this->data['areas']        =   $area_table;
        $this->data['departments']  =   $department_table;
        $this->data['clinic']       =   $clinic_table;
        $this->data['prices']       =   $price_table;
        $this->data['site_title']   =   'Revitalize';
        $this->data['page_title']   =   'Edit Doctors Profile - '.$this->data['site_title'];
        $this->data['view']         =   'Update_doc_Profile';
            
        $this->load->view('layout',$this->data);

    }
}
