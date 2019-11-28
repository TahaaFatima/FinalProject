<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
                $this->data['modal'] = true;
                $this->data['view'] = 'Home';
                $this->data['page_title'] = 'Home';
                $this->load->view('Layout',$this->data);
	}
}