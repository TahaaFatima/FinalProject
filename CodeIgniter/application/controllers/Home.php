<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    function __construct()
        {
            parent::__construct();
       }  
	public function index()
	{
                $this->data['modal']        = true;
                $this->data['view']         = 'Home';
                $this->data['site_title']   = 'Revitalize';
                $this->data['page_title']   = 'Home - '.$this->data['site_title'];
                $this->load->view('layout',$this->data);
	}
}