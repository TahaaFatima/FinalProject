<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Profile extends MY_Controller {

	public function index()
	{

            $doctors_id  = $this->session->userdata('doctors_id');
            $where = ['doctors_id' => $doctors_id];
            $this->load->model('Doctor_registration_model');
            $doc_info = $this->Doctor_registration_model->retrieving($where, false);

            $data['doctors_info'] = $doc_info;
            $data['view'] = 'Doctors_Profile';
            $data['page_title'] = 'Doctors_Profile';
            $this->load->view('Layout',$data);
	}
}