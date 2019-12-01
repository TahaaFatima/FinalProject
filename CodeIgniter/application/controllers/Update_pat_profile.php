<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_pat_profile extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
            if(!isset($login_in) || empty($login_in)){
                redirect('Login');
            }
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 1) {
                redirect('Doctors_Profile');
            }
        }
    }
    
    public function index(){
        $patients_id = $this->session->userdata('user_id');
        $where = ['patient_id' => $patients_id];
        $this->load->model('Patient_Registration_model');
        $pat_info = $this->Patient_Registration_model->retrieving($where, false);
       
        if(isset($_POST['edit'])){

            $record_pat =[
                'full_name'         => $_POST['Name'],
                'age'               => $_POST['Age'],
                'gender'            => $_POST['Gender'],
                'phone_number'      => $_POST['Phone_Number'],
            ];
            
            $this->load->model('Patient_Registration_model');
            $updated = $this->Patient_Registration_model->updating($record_pat , $where);
            $this->data['updated']          =   $updated;
            redirect('Patients_Profile');
        }

        $this->data['patients_info']    =   $pat_info;
        $this->data['site_title']       =   'Revitalize';
        $this->data['page_title']       =   'Edit Patients Profile - '.$this->data['site_title'];
        $this->data['view']             =   'Update_pat_profile';

        $this->load->view('layout',$this->data);
    }
}
