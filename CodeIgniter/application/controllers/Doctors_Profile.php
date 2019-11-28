<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Profile extends MY_Controller {
        function __construct()
    {
        parent::__construct();
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 2) {
                redirect('Patients_Profile');
            }
        }
    }

	public function index()
	{
        $this->load->model('Doctor_registration_model');
        $doctors_id  = $this->session->userdata('user_id');
        $where = ['doctors_registration.doctors_id' => $doctors_id];
        $join_retrieve[] = [
                        'table_name'=>'price',
                        'column_with'=>'doctors_registration.price_id = price.price_id'
                        ];
        $join_retrieve[] = [
                        'table_name'=>'department',
                        'column_with'=>'doctors_registration.department_id = department.department_id'
                        ];
        $join_retrieve[] = [
                        'table_name'=>'area',
                        'column_with'=>'doctors_registration.area_id = area.area_id'
                        ];
        $join_retrieve[] = [
                        'table_name'=>'clinic',
                        'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'
                        ];
        $doc_info = $this->Doctor_registration_model->search_join($where,$join_retrieve);
        $this->load->model('Appt_Record');
        $avg_rating = [];
        $id_doc = $doctors_id;
        $where  = ['doctors_id'=>$id_doc];
        $select = 'avg(rating) as rating';
        
        $__ = $this->Appt_Record->retrieve_ratings($select,$where);
        $avg_rating[$id_doc] = $__ ;
        
        $this->data['doctors_info'] = $doc_info;
        $this->data['ratings']      = $avg_rating;
        $this->data['view']         = 'Doctors_Profile';
        $this->data['page_title']   = 'Doctors_Profile';
        $this->load->view('Layout',$this->data);
	}
}