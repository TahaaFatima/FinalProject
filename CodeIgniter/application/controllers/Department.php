<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends MY_Controller {

	public function index()
	{
            $this->load->model('Department_Model'); 
            $department_table = $this->Department_Model->retrieving();

            $this->data['department_ids'] = $department_table;
            $this->data['view'] = 'Department';
            $this->data['page_title'] = 'Department';
            $this->load->view('Layout',$this->data);
	}
}