<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends MY_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->model('Doctor_registration_model');
        }
        public function index(){
                
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
        public function searching(){
            //$to_search = [];

            // if(!empty($_POST['Department'])){
            //     $to_search['department_id'] = $_POST['Department']; 
            // }
            // if(!empty($_POST['Location'])){
            //     $to_search['area_id'] = $_POST['Location']; 
            // }
            // if(!empty($_POST['Price'])){
            //     $to_search['price_id'] = $_POST['Price']; 
            // }

            $data = $this->inner_joins->inner_joins();
            var_dump($data);die;
            $data['page_title'] = 'Our Doctors';
            $data['view'] = 'Doctors_List';
            $this->load->view('layout', $data);
        }
    }