<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions_show extends MY_Controller {

	public function index()
	{
                $this->load->model('Prescriptions_Model');
                $to_show = [];
                if(isset($_REQUEST['appt_id']) && !empty($_REQUEST['appt_id'])){
                    $to_show['prescriptions.appointment_id'] = $_REQUEST['appt_id'];      
                }
                $join_retrieve[] =  [
                        'table_name'=>'appointment_record',
                        'column_with'=>'appointment_record.appointment_id= prescriptions.appointment_id'
                ];
                
                $doc_appointment = $this->Prescriptions_Model->search_join($to_show,$join_retrieve);

                
                $this->data['prescription'] = $doc_appointment;
                $this->data['view'] = 'Prescriptions_show';
                $this->data['page_title'] = 'Prescriptions_show';
                $this->load->view('Layout',$this->data);
	}
}