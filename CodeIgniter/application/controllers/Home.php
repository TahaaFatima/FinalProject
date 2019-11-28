<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    function __construct()
        {
            parent::__construct();
            $login_in = $this->session->userdata('signed_in');
                if(!$login_in){
                    redirect('Login');
                }
       }  
	public function index()
	{
                $this->data['modal']        = true;
                $this->data['view']         = 'Home';
                $this->data['site_title']   = 'Revitalize';
                $this->data['page_title']   = 'Home - '.$this->data['site_title'];
                $this->load->view('Layout',$this->data);
	}
}