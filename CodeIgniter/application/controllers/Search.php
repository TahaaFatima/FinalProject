<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends MY_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->model('Doctor_registration_model');
        }
        public function index(){
                $to_search = [];
                if(isset($_REQUEST['submit_search']) ||isset($_REQUEST['departmentSelector']) ){
                        $this->load->model('Doctor_registration_model');
                        $to_search = [];
                        if( isset($_REQUEST['departmentSelector']) && ($_REQUEST['departmentSelector'] != 'none')){
                            $to_search['doctors_registration.department_id'] = $_REQUEST['departmentSelector']; 
                        }
                        if(  isset($_REQUEST['Location']) && ($_REQUEST['Location'] != 'none')){
                            $to_search['doctors_registration.area_id'] = $_REQUEST['Location'];
                            // doctors_registration.area_id = 2 
                        }
                        if(isset($_REQUEST['Price']) &&  ($_REQUEST['Price'] != 'none')){
                            $to_search['doctors_registration.price_id'] = $_REQUEST['Price']; 
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
                        } 
                        $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);
                        
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