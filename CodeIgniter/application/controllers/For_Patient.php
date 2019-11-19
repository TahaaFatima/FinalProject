<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class For_Patient extends MY_Controller {

	public function index()
	{
                $data['view'] = 'For_Patient';
                $data['page_title'] = 'For_Patient';
                $this->load->view('Layout',$data);
	}
}