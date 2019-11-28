<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_List extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('signed_in');
        if(!$login_in){
            redirect('Login');
        }
    }
    function index(){

        $this->load->model('Area_Model');
        $area_table = $this->Area_Model->retrieving();
         
        $this->load->model('Department_Model');
        $department_table = $this->Department_Model->retrieving();

        $this->load->model('Price_Model');
        $price_table = $this->Price_Model->retrieving();

        $this->load->model('Clinic_Model');
        $clinic_table = $this->Clinic_Model->retrieving();

        $to_search = [];
        if(isset($_REQUEST['submit_search']) ||isset($_REQUEST['departmentSelector']) ){
            $this->load->model('Doctor_registration_model');
            $to_search = [];
            if( isset($_REQUEST['departmentSelector']) && ($_REQUEST['departmentSelector'] != 'none')){
                $to_search['doctors_registration.department_id'] = $_REQUEST['departmentSelector']; 
            }
            if(  isset($_REQUEST['Location']) && ($_REQUEST['Location'] != 'none')){
                $to_search['doctors_registration.area_id'] = $_REQUEST['Location'];
            }
            if(isset($_REQUEST['Price']) &&  ($_REQUEST['Price'] != 'none')){
                $to_search['doctors_registration.price_id'] = $_REQUEST['Price']; 
            }
            if(isset($_REQUEST['Clinic']) &&  ($_REQUEST['Clinic'] != 'none')){
                $to_search['doctors_registration.clinic_id'] = $_REQUEST['Clinic']; 
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
            $join_retrieve[] =  [
                            'table_name'=>'clinic',
                            'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'];
            $join_retrieve[] =  [
                            'table_name'=>'dr_time_slot',
                            'column_with'=>'doctors_registration.doctors_id = dr_time_slot.doctors_id'];

            $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);
            $this->load->model('Appt_Record');
            $avg_rating = [];

            foreach($doc_joins as $single_doc){
                $id_doc = $single_doc->doctors_id;
                $where  = ['doctors_id'=>$id_doc];
                $select = 'avg(rating) as rating';
                
                $__ = $this->Appt_Record->retrieve_ratings($select,$where);
                $avg_rating[$id_doc] = $__ ;
            }
        
        $this->data['site_title']  = 'Revitalize';
        $this->data['page_title']  = 'Our Doctors - '.$this->data['site_title'];
        $this->data['view']        = 'Doctors_List';
        $this->data['ratings']     = $avg_rating;
        $this->data['areas']       = $area_table;
        $this->data['departments'] = $department_table;
        $this->data['prices']      = $price_table;
        $this->data['clinics']     = $clinic_table;
        $this->data['doctors']     = $doc_joins;
        $this->load->view('layout',$this->data);
        }
    }
}