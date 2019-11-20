<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Profile extends MY_Controller {

	public function index()
	{
            $data['view'] = 'Doctors_Profile';
            $data['page_title'] = 'Doctors_Profile';
            $this->load->view('Layout',$data);
	}
}