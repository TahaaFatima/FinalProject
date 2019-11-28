<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class For_Patient extends MY_Controller {
	public function index()
	{
                $this->data['view']         = 'For_Patient';
                $this->data['site_title']   = 'Revitalize';
                $this->data['page_title']   = 'For Patient - '.$this->data['site_title'];
               
                $this->load->view('Layout',$this->data);
	}
}