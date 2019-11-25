<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_Listing_Completed extends MY_Controller {

	public function index()
	{       
        $data['view'] = 'Appointment_Listing_Completed';
        $data['page_title'] = 'Your Appointments - Completed';
        $this->load->view('Layout',$data);
	}
}