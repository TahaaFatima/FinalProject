<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('signed_in');
        if(!$login_in){
            redirect('Login');
        }
    }
	public function index()
	{
            $this->load->model('Department_Model'); 
            $department_table = $this->Department_Model->retrieving();

            $this->data['department_ids']   =   $department_table;
            $this->data['view']             =   'Department';
            $this->data['site_title']       =   'Revitalize';
            $this->data['page_title']       =   'Departments - '.$this->data['site_title'];
            
            $this->load->view('Layout',$this->data);
	}
}