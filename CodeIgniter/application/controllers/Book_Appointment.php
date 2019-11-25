<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_Appointment extends MY_Controller {

    public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        if(isset($_POST['submit-appt'])){
            $validation = [
                [
                    'field' => 'date_of_appt',
                    'label' => 'Date of appointment',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_from_appt',
                    'label' => 'Time from',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_to_appt',
                    'label' => 'Time to',
                    'rules' => 'required'
                ]
            ];

            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if (!$this->form_validation->run())
            {
            
            }else{

                $this->load->helper('other');
                $date_appt = arrangeDate($_POST['date_of_appt']);

                $appt_slot =['patient_id'=>$this->session->userdata('user_id'), 'doctors_id'=>$_GET['Doc_id'], 'time_in'=>$_POST['time_from_appt'],'time_out'=>$_POST['time_to_appt'],'appointment_date'=>$date_appt, 'appointment_status'=>'Pending'];
                $this->session->set_flashdata('appt_slot',$appt_slot);
                redirect('Patient_assessment_form');
            }
        }

        $this->load->model('Doctor_registration_model');
        $to_search = [];
        if(isset($_GET['Doc_id'])){
            $to_search['doctors_registration.doctors_id'] = $_GET['Doc_id'];
            
        }
        $join_retrieve[] = [
                            'table_name'=>'price',
                            'column_with'=>'doctors_registration.price_id = price.price_id'];
        $join_retrieve[] = [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id'];
        $join_retrieve[] = [
                            'table_name'=>'area',
                            'column_with'=>'doctors_registration.area_id = area.area_id'];

        $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);
        $data['doctors'] = $doc_joins;
        $data['view'] = 'Book_Appointment';
        $data['page_title'] = 'Book Appointment';
        $this->load->view('Layout',$data);
	}
}