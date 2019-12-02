<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions_edit extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('login');
        }
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 2) {
                redirect('patients_profile');
            }
        }
    }    
	public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        if(isset($_REQUEST['edit-prescrition'])){
            
            $validation = [
                [
                    'field' => 'prescriptions',
                    'label' => 'prescriptions',
                    'rules' => 'trim|required'
                    ]
                ];
                
                $this->form_validation->set_rules($validation);

                if ($this->form_validation->run())
                {
                $this->load->model('prescriptions_model');
                
                $record_pres = [
                    'prescription' => $_REQUEST['prescriptions']
                ];

                $this->prescriptions_model->updating($record_pres, ['appointment_id' => $_REQUEST['appt_id']]);

                $this->session->set_userdata('appointment_id', $_REQUEST['appt_id']);
                
                redirect('prescriptions-show');
            }
        }
        
        $this->load->model('prescriptions_model');

        if(isset($_REQUEST['appt_id']) && !empty($_REQUEST['appt_id'])){
            $where = ['appointment_id' => $_REQUEST['appt_id']]; 
            $doc_appointment = $this->prescriptions_model->retrieving($where);     
        }
      
        $this->data['prescription'] = $doc_appointment;
        $this->data['view']         = 'prescriptions_edit';
        $this->data['site_title']   = 'Revitalize';
        $this->data['page_title']   = 'Prescriptions - '.$this->data['site_title'];
        
        $this->load->view('layout',$this->data);
	}
}