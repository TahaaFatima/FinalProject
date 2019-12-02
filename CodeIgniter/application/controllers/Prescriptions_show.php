<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions_show extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('login');
        }
    }    
	public function index()
	{
        $this->load->model('prescriptions_model');
        if(isset($_REQUEST['appt_id']) && !empty($_REQUEST['appt_id'])){
            $where = ['appointment_id' => $_REQUEST['appt_id']]; 
            $doc_appointment = $this->prescriptions_model->retrieving($where);     
        }elseif($this->session->userdata('appointment_id') !== null){
            $where = ['appointment_id' => $this->session->userdata('appointment_id')]; 
            $doc_appointment = $this->prescriptions_model->retrieving($where);
        }
        
        $this->data['prescription'] = $doc_appointment;
        $this->data['view']         = 'prescriptions_show';
        $this->data['site_title']   = 'Revitalize';
        $this->data['page_title']   = 'Prescriptions - '.$this->data['site_title'];
        
        $this->load->view('layout',$this->data);
	}
}