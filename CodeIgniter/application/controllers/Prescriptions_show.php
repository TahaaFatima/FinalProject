<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions_show extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('Login');
        }
    }    
	public function index()
	{
                $this->load->model('prescriptions_model');
                $to_show = [];
                if(isset($_REQUEST['appt_id']) && !empty($_REQUEST['appt_id'])){
                    $to_show['prescriptions.appointment_id'] = $_REQUEST['appt_id'];      
                }
                $join_retrieve[] =  [
                        'table_name'=>'appointment_record',
                        'column_with'=>'appointment_record.appointment_id= prescriptions.appointment_id'
                ];
                
                $doc_appointment = $this->prescriptions_model->search_join($to_show,$join_retrieve);

                
                $this->data['prescription'] = $doc_appointment;
                $this->data['view']         = 'prescriptions_show';
                $this->data['site_title']   = 'Revitalize';
                $this->data['page_title']   = 'Prescriptions - '.$this->data['site_title'];
                
                $this->load->view('layout',$this->data);
	}
}