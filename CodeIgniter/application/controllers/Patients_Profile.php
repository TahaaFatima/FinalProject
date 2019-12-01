<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_profile extends MY_Controller {
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
                redirect('Doctors_profile');
            }
        }
    }

	public function index()
	{
        $patients_id  = $this->session->userdata('user_id');
        $where = ['patient_id' => $patients_id];
        $this->load->model('patient_registration_model');
        $pat_info = $this->patient_registration_model->retrieving($where, false);
 
        $this->data['patients_info'] = $pat_info;
        $this->data['view']          = 'patients_profile';
        $this->data['site_title']    = 'Revitalize';
        $this->data['page_title']    = 'My Profile - '.$this->data['site_title'];
        
        $this->load->view('layout',$this->data);
	}
}