<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_Appointment extends MY_Controller {

	public function index()
	{       
        $this->load->model('appt_booking_model');
        $to_show = [];
        if($this->session->userdata('user_id') !== null ){
            $to_show['appointment_record.doctors_id'] = $this->session->userdata('user_id'); 
        }
        $join_retrieve[] =  [
            'table_name'=>'doctors_registration',
            'column_with'=>'appointment_record.doctors_id= doctors_registration.doctors_id'
        ];
        $join_retrieve[] =  [
            'table_name'=>'clinic',
            'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'
        ];

        $pat_appointment = $this->appt_booking_model->search_join($to_show,$join_retrieve);
        $data['patients_App_data'] = $pat_appointment;

        $data['view'] = 'Patients_Appointment';
        $data['page_title'] = 'Patients_Appointment';
        $this->load->view('Layout',$data);
	}
}