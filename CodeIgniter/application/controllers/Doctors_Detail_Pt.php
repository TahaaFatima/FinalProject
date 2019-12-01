<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_detail_pt extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        
    }
    public function index()
	{
        $this->load->model('doctor_registration_model');
        $to_search = [];
        if(isset($_GET['Doc_id'])){
            $to_search['doctors_registration.doctors_id'] = $_GET['Doc_id'];
        }
        $join_retrieve[] =  [
                            'table_name'=>'price',
                            'column_with'=>'doctors_registration.price_id = price.price_id'
                            ];
        $join_retrieve[] =  [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id'
                            ];
        $join_retrieve[] =  [
                            'table_name'=>'area',
                            'column_with'=>'doctors_registration.area_id = area.area_id'
                            ];
        $join_retrieve[] =  [
                            'table_name'=>'clinic',
                            'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'
                            ];
        $join_retrieve[] =  [
                                'table_name'=>'dr_time_slot',
                                'column_with'=>'doctors_registration.doctors_id = dr_time_slot.doctors_id'
                            ];
        $doc_joins = $this->doctor_registration_model->search_join($to_search,$join_retrieve);
        $join_retrieve = [];
        $to_search     = [];
        $this->load->model('myreviews');
        $to_search = ['doctor_rating.doctors_id'=> $_GET['Doc_id']];
        $join_retrieve[] =  [
                                'table_name'=>'patients_registration',
                                'column_with'=>'doctor_rating.patient_id = patients_registration.patient_id'
                            ];
        $reviews = $this->myreviews->search_join($to_search,$join_retrieve);
        $list_review   = [];
        foreach($reviews as $review){
            $list_review[$review->patient_id] = [$review->full_name => $review->review];
        }

        $this->load->model('appt_record');
            $avg_rating = [];

            foreach($doc_joins as $single_doc){
                $id_doc = $single_doc->doctors_id;
                $where  = ['doctors_id'=>$id_doc];
                $select = 'avg(rating) as rating';
                
                $avg_rate = $this->appt_record->retrieve_ratings($select,$where);
                $avg_rating[$id_doc] = $avg_rate ;
            }

        $this->data['doctors']      =   $doc_joins;
        $this->data['ratings']      =   $avg_rating;
        $this->data['reviews']      =   $list_review;
        $this->data['site_title']   =   'Revitalize';
        $this->data['page_title']   =   'Doctor Details - '.$this->data['site_title'];
        $this->data['view']         =   'doctors_detail_pt';

        $this->load->view('layout',$this->data);
	}
}