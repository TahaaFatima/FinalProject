<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_List extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index(){

        $this->load->model('Area');
        $area_table = $this->Area->retrieving();
         
        $this->load->model('DepartmentM');
        $department_table = $this->DepartmentM->retrieving();

        $this->load->model('Price');
        $price_table = $this->Price->retrieving();
        
        // $this->load->model('Doctor_registration_model');
        // $doctors = $this->Doctor_registration_model->retrieving();
        
        $this->load->model('Inner_joins');
        $this->Inner_joins->table_name = 'doctors_registration';
        $join_retrieve[] = [
                            'table_name'=>'price',
                            'column_with'=>'doctors_registration.price_id = price.price_id'];
        $join_retrieve[] = [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id'];
        $join_retrieve[] = [
                            'table_name'=>'area',
                            'column_with'=>'doctors_registration.area_id = area.area_id'];

        $doc_joins = $this->Inner_joins->search_join([],$join_retrieve);

        $data['page_title'] = 'Our Doctors';
        $data['view'] = 'Doctors_List';
        $data['areas'] = $area_table;
        $data['departments'] = $department_table;
        $data['prices'] = $price_table;
        $data['doctors'] = $doc_joins;
        $this->load->view('layout',$data);
    }
}