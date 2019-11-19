<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends MY_Controller {

	public function index()
	{
            $data['view'] = 'Contact_Us';
            $data['page_title'] = 'Contact_Us';
            $this->load->view('Layout',$data);
	}
}