<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancel_Appointments extends MY_Controller {

	public function index()
	{
        if(isset($_REQUEST['appt_id'])){
            $this->load->model('appt_booking_model');
            $to_update = ['appointment_status'=>'Cancelled'];
            $where     = ['appointment_id'=>$_REQUEST['appt_id']];
            $this->appt_booking_model->updating($to_update,$where);
            redirect('Doctors_Appoinments');
        }
	}
}