<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class For_doctor extends MY_Controller {

	public function index()
	{
                $this->data['view']         = 'for_doctor';
                $this->data['site_title']   = 'Revitalize';
                $this->data['page_title']   = 'For Doctor - '.$this->data['site_title'];
               
                $this->load->view('layout',$this->data);
	}
}