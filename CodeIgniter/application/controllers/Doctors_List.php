<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_List extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->load->model('Get_Area');
        $area_table = $this->Get_Area->retrieving();
         
        $this->load->model('Get_Department');
        $department_table = $this->Get_Department->retrieving();

        $this->load->model('Get_Price');
        $price_table = $this->Get_Price->retrieving();

        $this->load->model('Doctor_registration_model');
        $doctors = $this->Doctor_registration_model->retrieving();

        $data['page_title'] = 'Our Doctors';
        $data['view'] = 'Doctors_List';
        $data['areas'] = $area_table;
        $data['departments'] = $department_table;
        $data['prices'] = $price_table;
        $data['doctors'] = $doctors;
        $this->load->view('layout',$data);
    }
}