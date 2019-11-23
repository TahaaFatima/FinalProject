<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_pat_profile extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $patients_id = $this->session->userdata('user_id');
        $where = ['patient_id' => $patients_id];
        $this->load->model('Patient_Registration_model');
        $pat_info = $this->Patient_Registration_model->retrieving($where, false);
       
        if(isset($_POST['edit'])){

            $data =[
                'full_name'         => $_POST['Name'],
                'age'               => $_POST['Age'],
                'gender'            => $_POST['Gender'],
                'phone_number'      => $_POST['Phone_Number'],
            ];
            
            $this->load->model('Patient_Registration_model');
            $this->Patient_Registration_model->updating($data , $where);
        }

        $data['patients_info'] = $pat_info;
        $data['page_title'] = 'Update_pat_profile';
        $data['view'] = 'Update_pat_profile';
        $this->load->view('layout',$data);
    }
}
