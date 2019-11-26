<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prescriptions extends MY_Controller {

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
                $this->load->model('Prescriptions_Model');
                
                $data = [
                    'prescription'      => $_REQUEST['prescritions'],
                    'appointment_id'    => $_REQUEST['prescription_id'],
                ];
                
                $this->Prescriptions_Model->inserting($data);
            }
        }       

                $data['view'] = 'Prescriptions';
                $data['page_title'] = 'Prescriptions';
                $this->load->view('Layout',$data);
	}
}