<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions_show extends MY_Controller {

	public function index()
	{
        $appointment_id  = $this->session->userdata('appointment_id');
        $where = ['appointment_id' => $appointment_id];
        $this->load->model('appt_booking_model');
        $doc_info = $this->appt_booking_model->retrieving($where, false);
        var_dump($doc_info);die;


                $data['view'] = 'Prescriptions_show';
                $data['page_title'] = 'Prescriptions_show';
                $this->load->view('Layout',$data);
	}
}