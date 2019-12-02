<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_assess_doctor extends MY_Controller {
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
                $this->load->model('patients_assessment_model');
                $where = [];
                if(isset($_REQUEST['appt_id']) && !empty($_REQUEST['appt_id'])){
                $where['patient_assessment.appointment_id'] = $_REQUEST['appt_id'];
                }

                $doc_appointment = $this->patients_assessment_model->retrieving($where);
        
                $this->data['doctors_App_data'] =    $doc_appointment[0];
                $this->data['view']             =    'patients_assess_doctor';
                $this->data['site_title']       =    'Revitalize';
                $this->data['page_title']       =    'Patients Assessment Form - '.$this->data['site_title'];
                
                $this->load->view('layout',$this->data);
	}
}