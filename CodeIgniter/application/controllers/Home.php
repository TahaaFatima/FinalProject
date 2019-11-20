<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
                $data['modal'] = true;
                $data['view'] = 'Home';
                $data['page_title'] = 'Home';
                $this->load->view('Layout',$data);
	}
}