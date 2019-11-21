<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Detail_Pt extends MY_Controller {

	public function index()
	{
            $data['view'] = 'Doctors_Detail_Pt';
            $data['page_title'] = 'Doctors_Detail_Pt';
            $this->load->view('Layout',$data);
	}
}