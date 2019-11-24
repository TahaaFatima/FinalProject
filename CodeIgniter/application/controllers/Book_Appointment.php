<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_Appointment extends MY_Controller {

    public function index()
	{
        $this->load->model('Doctor_registration_model');
        $to_search = [];
        if(isset($_GET['Doc_id'])){
            $to_search['doctors_registration.doctors_id'] = $_GET['Doc_id'];
            
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

        $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);
        $data['doctors'] = $doc_joins;
        $data['view'] = 'Book_Appointment';
        $data['page_title'] = 'Book Appointment';
        $this->load->view('Layout',$data);
	}
}