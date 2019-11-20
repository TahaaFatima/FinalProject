<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Profile extends MY_Controller {

	public function index()
	{
            $data['view'] = 'Patients_Profile';
            $data['page_title'] = 'Patients_Profile';
            $this->load->view('Layout',$data);
	}
}