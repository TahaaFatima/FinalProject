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

        $data['doctors_info'] = $doc_info;

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
                ];
                $id = $this->session->userdata('user_id');
                $this->load->model('Doctor_registration_model');
                $this->Doctor_registration_model->updating($data , $id);
            }

        $this->load->model('Get_Area');
        $area_table = $this->Get_Area->retrieving();
            
        $this->load->model('Get_Department');
        $department_table = $this->Get_Department->retrieving();

        $this->load->model('Get_Clinic');
        $clinic_table = $this->Get_Clinic->retrieving();

        $this->load->model('Get_Price');
        $price_table = $this->Get_Price->retrieving();


        $data['areas'] = $area_table;
        $data['departments'] =  $department_table;
        $data['clinic'] = $clinic_table;
        $data['prices'] = $price_table;
        $data['page_title'] = 'Update_doc_Profile';
        $data['view'] = 'Update_doc_Profile';
        $this->load->view('layout',$data);
    }
}
