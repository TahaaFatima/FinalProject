<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_Appointment extends MY_Controller {

	public function index()
	{
            $data['view'] = 'Book_Appointment';
            $data['page_title'] = 'Book Appointment';
            $this->load->view('Layout',$data);
	}
}