<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_doc_profile extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $doctors_id  = $this->session->userdata('user_id');
        $where = ['doctors_id' => $doctors_id];
        $this->load->model('Doctor_registration_model');
        $doc_info = $this->Doctor_registration_model->retrieving($where, false);



        if(isset($_POST['Update'])){
            
                $data =[
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
                $this->Doctor_registration_model->updating ( $data  ,$where );
            }

        $this->load->model('Area_Model');
        $area_table = $this->Area_Model->retrieving();
            
        $this->load->model('Department_Model');
        $department_table = $this->Department_Model->retrieving();

        $this->load->model('Clinic_Model');
        $clinic_table = $this->Clinic_Model->retrieving();

        $this->load->model('Price_Model');
        $price_table = $this->Price_Model->retrieving();

        $data['doctors_info'] = $doc_info;
        $data['areas'] = $area_table;
        $data['departments'] =  $department_table;
        $data['clinic'] = $clinic_table;
        $data['prices'] = $price_table;
        $data['page_title'] = 'Update_doc_Profile';
        $data['view'] = 'Update_doc_Profile';
        $this->load->view('layout',$data);
    }
}
