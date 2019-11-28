<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Detail_Pt extends MY_Controller {
    
    public function index()
	{
        $this->load->model('Doctor_registration_model');
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
        // $join_retrieve[] =  [
        //                         'table_name'=>'doctor_rating',
        //                         'column_with'=>'doctors_registration.doctors_id = doctor_rating.doctors_id'
        //                     ];

        $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);

        $this->data['doctors'] = $doc_joins;
        $this->data['page_title'] = 'Doctor Details';
        $this->data['view'] = 'Doctors_Detail_Pt';
        $this->load->view('Layout',$this->data);
	}
}