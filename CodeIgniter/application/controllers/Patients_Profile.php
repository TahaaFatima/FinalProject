<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Profile extends MY_Controller {
        function __construct()
    {
        parent::__construct();
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 1) {
                redirect('Doctors_Profile');
            }
        }
    }

	public function index()
	{
        $patients_id  = $this->session->userdata('user_id');
        $where = ['patient_id' => $patients_id];
        $this->load->model('Patient_registration_model');
        $pat_info = $this->Patient_registration_model->retrieving($where, false);
 
        $this->data['patients_info'] = $pat_info;
        $this->data['view'] = 'Patients_Profile';
        $this->data['page_title'] = 'Patients_Profile';
        $this->load->view('Layout',$this->data);
	}
}