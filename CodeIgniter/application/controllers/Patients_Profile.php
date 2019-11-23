<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Profile extends MY_Controller {

	public function index()
	{
        $patients_id  = $this->session->userdata('pt_id');
        $where = ['patient_id' => $patients_id];
        $this->load->model('Patient_registration_model');
        $pat_info = $this->Patient_registration_model->retrieving($where, false);
       // var_dump($pat_info);die;
        $data['patients_info'] = $pat_info;
        $data['view'] = 'Patients_Profile';
        $data['page_title'] = 'Patients_Profile';
        $this->load->view('Layout',$data);
	}
}