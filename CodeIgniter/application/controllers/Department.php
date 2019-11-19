<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends MY_Controller {

	public function index()
	{
            $this->load->model('Get_Department'); 
            $department_table = $this->Get_Department->retrieving();

            $data['department_ids'] = $department_table;
            $data['view'] = 'Department';
            $data['page_title'] = 'Department';
            $this->load->view('Layout',$data);
	}
}