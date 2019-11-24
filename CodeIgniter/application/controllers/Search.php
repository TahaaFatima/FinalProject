<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends MY_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->model('Doctor_registration_model');
        }
        public function index(){
                if(isset($_POST['submit_search'])){
                        $this->load->model('Inner_joins');
                        $this->Inner_joins->table_name = 'doctors_registration';
                        $to_search = [];
                        if($_POST['Department'] != 'none'){
                            $to_search['doctors_registration.department_id'] = $_POST['Department']; 
                        }
                        if($_POST['Location'] != 'none'){
                            $to_search['doctors_registration.area_id'] = $_POST['Location'];
                            // doctors_registration.area_id = 2 
                        }
                        if($_POST['Price'] != 'none'){
                            $to_search['doctors_registration.price_id'] = $_POST['Price']; 
                        }

                        $join_retrieve[] = [
                            'table_name'=>'price',
                            'column_with'=>'doctors_registration.price_id = price.price_id'];
                        $join_retrieve[] = [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id'];
                        $join_retrieve[] = [
                            'table_name'=>'area',
                            'column_with'=>'doctors_registration.area_id = area.area_id'];
                            
                        $doc_joins = $this->Inner_joins->search_join($to_search,$join_retrieve);
                        
                        $this->load->model('Area_Model');
                        $area_table = $this->Area_Model->retrieving();
                         
                        $this->load->model('Department_Model');
                        $department_table = $this->Department_Model->retrieving();
                
                        $this->load->model('Price_Model');
                        $price_table = $this->Price_Model->retrieving();

                        $data['page_title'] = 'Our Doctors';
                        $data['view'] = 'Doctors_List';
                        $data['areas'] = $area_table;
                        $data['departments'] = $department_table;
                        $data['prices'] = $price_table;
                        $data['doctors'] = $doc_joins;
                        $this->load->view('layout',$data);
                }
            }
    }