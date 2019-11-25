<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_Listing_Patient extends MY_Controller {

	public function index()
	{       
                $data['view'] = 'Appointment_Listing_Patient';
                $data['page_title'] = 'Your Appointments';
                $this->load->view('Layout',$data);
	}
}