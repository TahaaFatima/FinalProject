<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends MY_Controller {

	public function index()
	{
            $this->load->model('DepartmentM'); 
            $department_table = $this->DepartmentM->retrieving();

            $data['department_ids'] = $department_table;
            $data['view'] = 'Department';
            $data['page_title'] = 'Department';
            $this->load->view('Layout',$data);
	}
}