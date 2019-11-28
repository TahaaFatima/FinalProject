<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class For_Doctor extends MY_Controller {

	public function index()
	{
                $this->data['view'] = 'For_Doctor';
                $this->data['page_title'] = 'For_Doctor';
                $this->load->view('Layout',$this->data);
	}
}