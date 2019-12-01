<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions extends MY_Controller {
    
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('Login');
        }
    }    
	public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if(isset($_POST['submit-prescrition']))
        {
            
            $validation = [
                [
                    'field' => 'prescritions',
                    'label' => 'Prescritions',
                    'rules' => 'trim|required'
                ]
            ];
            
            $this->form_validation->set_rules($validation);
            
            if ($this->form_validation->run())
            {
                $this->load->model('prescriptions_model');
                
                $record_pres = [
                    'prescription'      => $_REQUEST['prescritions'],
                    'appointment_id'    => $_REQUEST['prescription_id'],
                ];
                
                $this->prescriptions_model->inserting($record_pres);
            }
        }       

                $this->data['view']       = 'prescriptions';
                $this->data['site_title'] = 'Revitalize';
                $this->data['page_title'] = 'Prescriptions - '.$this->data['site_title'];
                
                $this->load->view('layout',$this->data);
	}
}