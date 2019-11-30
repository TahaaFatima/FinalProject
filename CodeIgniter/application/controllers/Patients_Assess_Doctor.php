<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Assess_Doctor extends MY_Controller {
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
        $this->load->model('appt_booking_model');
        $to_show = [];
        if($this->session->userdata('user_id') !== null ){
            $to_show['appointment_record.doctors_id'] = $this->session->userdata('user_id'); 
        }
        $join_retrieve[] =  [
                'table_name'=>'patients_registration',
                'column_with'=>'appointment_record.patient_id= patients_registration.patient_id'
        ];
        $join_retrieve[] =  [
                'table_name'=>'patient_assessment',
                'column_with'=>'appointment_record.appointment_id= patient_assessment.appointment_id'
        ];

        $doc_appointment = $this->appt_booking_model->search_join($to_show,$join_retrieve);
      
        $this->data['doctors_App_data'] =    $doc_appointment[0];
        $this->data['view']             =    'Patients_Assess_Doctor';
        $this->data['site_title']       =    'Revitalize';
        $this->data['page_title']       =    'Patients Assessment Form - '.$this->data['site_title'];
        
        $this->load->view('layout',$this->data);
	}
}