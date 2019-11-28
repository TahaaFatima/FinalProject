<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_List extends MY_Controller {
    function __construct()
    {
        parent::__construct();
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

        $this->load->model('Doctor_registration_model');
        $to_search = [];
        if(isset($_GET['departmentSelector'])){
            $to_search['doctors_registration.department_id'] = $_GET['departmentSelector']; 
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
        // select avg(rating) from doctor_rating where doctors_id = 2
        $this->load->model('Appt_Record');
        $avg_rating = [];

        foreach($doc_joins as $single_doc){
            $id_doc = $single_doc->doctors_id;
            $where  = ['doctors_id'=>$id_doc];
            $select = 'avg(rating)';
            
            $__ = $this->Appt_Record->retrieve_ratings($select,$where);
            $avg_rating[$id_doc] = $__ ;
        }
        

        $data['page_title']  = 'Our Doctors';
        $data['view']        = 'Doctors_List';
        $data['ratings']     = $avg_rating;
        $data['areas']       = $area_table;
        $data['departments'] = $department_table;
        $data['prices']      = $price_table;
        $data['clinics']     = $clinic_table;
        $data['doctors']     = $doc_joins;
        $this->load->view('layout',$data);
    }
}