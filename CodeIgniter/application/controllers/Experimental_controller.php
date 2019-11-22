<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experimental_controller extends MY_Controller {

	public function index()
	{
        $this->load->model('Inner_joins');
        $this->Inner_joins->table_name = 'doctors_registration';
        $join_retrieve[] = [
                            'table_name'=>'price',
                            'column_with'=>'doctors_registration.price_id = price.price_id'];
        $join_retrieve[] = [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id'];
        $join_retrieve[] = [
                            'table_name'=>'area',
                            'column_with'=>'doctors_registration.area_id = area.area_id'];

        $this->Inner_joins->search_join($join_retrieve);
 	}
}