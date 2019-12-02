<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancel_appointments extends MY_Controller {
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
        if(isset($_REQUEST['appt_id'])){
            $this->load->model('appt_booking_model');
            $to_update = ['appointment_status'=>'Cancelled'];
            $where     = ['appointment_id'=>$_REQUEST['appt_id']];
            $this->appt_booking_model->updating($to_update,$where);

            if($this->session->userdata('role_id') == 1){
                redirect('Doctors_appointments');
            }
            if($this->session->userdata('role_id') == 2){
                redirect('Patients_appointment');
            } 
        }
	}
}