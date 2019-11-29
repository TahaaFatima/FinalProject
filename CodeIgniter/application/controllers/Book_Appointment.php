<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_Appointment extends MY_Controller {
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
                ],
                [
                    'field' => 'Weight',
                    'label' => 'Weight',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'ailments',
                    'label' => 'Previous Ailments',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'health_concern',
                    'label' => 'Health Concerns',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'medicines',
                    'label' => 'Current Medicines',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'allergies',
                    'label' => 'Allergies',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'exercise',
                    'label' => 'Exercise',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Alcohol',
                    'label' => 'Alcohol',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Caffeine',
                    'label' => 'Caffeine',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Smoke',
                    'label' => 'Smoke',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Sleeping',
                    'label' => 'Sleeping',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'other_details',
                    'label' => 'Other Details',
                    'rules' => 'trim|required'
                ],
            ];

            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if ($this->form_validation->run())
            { 
                $this->load->helper('other');
                $date_appt = arrangeDate($_POST['date_of_appt']);

            $record_appt = [
                    'patient_id'        =>$this->session->userdata('user_id'),
                    'doctors_id'        =>$_GET['Doc_id'],
                    'time_in'           =>$_POST['time_from_appt'],
                    'time_out'          =>$_POST['time_to_appt'],
                    'appointment_date'  =>$date_appt,
                    'appointment_status'=>'Pending'
                    ];

            $this->load->model('appt_booking_model');
            $id_returned = $this->appt_booking_model->inserting($record_appt);

            $record_asses = [
                'weight'                     => $_POST['Weight'],
                'previous_ailments'          => $_POST['ailments'],
                'current_health_concerns'    => $_POST['health_concern'],
                'current_medicines'          => $_POST['medicines'],
                'allergies'                  => $_POST['allergies'],
                'exercise'                   => $_POST['exercise'],
                'alcohol_consumption'        => $_POST['Alcohol'],
                'caffiene_consumption'       => $_POST['Caffeine'],
                'smoke_habits'               => $_POST['Smoke'],
                'sleeping_hours'             => $_POST['Sleeping'],
                'medical_history'            => $_POST['other_details'],
                'appointment_id'             =>  $id_returned,
            ];

            $this->load->model('Patients_assessment_model');
            $result  = $this->Patients_assessment_model->inserting($record_asses);
            redirect('Doctors_List');
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
        $join_retrieve[] =  [
                            'table_name'=>'dr_time_slot',
                            'column_with'=>'doctors_registration.doctors_id = dr_time_slot.doctors_id'
                            ];
        $join_retrieve[] =  [
                            'table_name'=>'clinic',
                            'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'
                            ];                    

        $doc_joins = $this->Doctor_registration_model->search_join($to_search,$join_retrieve);
        $this->load->model('Appt_Record');
        $avg_rating = [];

        foreach($doc_joins as $single_doc){
            $id_doc = $single_doc->doctors_id;
            $where  = ['doctors_id'=>$id_doc];
            $select = 'avg(rating) as rating';
            
            $__ = $this->Appt_Record->retrieve_ratings($select,$where);
            $avg_rating[$id_doc] = $__ ;
        }
        
        $this->data['ratings']       = $avg_rating;
        $this->data['doctors']       = $doc_joins;
        $this->data['site_title']    = 'Revitalize';
        $this->data['page_title']    = 'Book Appointment -'.$this->data['site_title'];
        $this->data['view']          = 'Book_Appointment';
        $this->load->view('Layout',$this->data);
	}
}