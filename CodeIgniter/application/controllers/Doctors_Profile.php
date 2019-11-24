<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_Profile extends MY_Controller {

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
        $data['doctors_info'] = $doc_info;
        $data['view'] = 'Doctors_Profile';
        $data['page_title'] = 'Doctors_Profile';
        $this->load->view('Layout',$data);
	}
}