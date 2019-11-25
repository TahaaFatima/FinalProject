<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Assess_Doctor extends MY_Controller {

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
      
        $data['doctors_App_data'] = $doc_appointment[0];
        $data['view'] = 'Patients_Assess_Doctor';
        $data['page_title'] = 'Patients_Assess_Doctor';
        $this->load->view('Layout',$data);
	}
}