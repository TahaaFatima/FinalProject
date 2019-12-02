<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends MY_Controller{

    function __construct()
    {
        parent::__construct();
        $login_in = $this->session->userdata('user_id');
        if(!isset($login_in) || empty($login_in)){
            redirect('login');
        }
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 1) {
                redirect('doctors-profile');
            }
        }
    }

	public function index()
	{
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if(isset($_POST['submit-review']))
        {
            
            $validation = [
                [
                    'field' => 'yourReview',
                    'label' => 'Your Reviews',
                    'rules' => 'trim|required'
                ]
                ];
                $this->form_validation->set_rules($validation);
                if ($this->form_validation->run())
                {
                    $this->load->model('myreviews');
                    
                    $review_arr = [
                        'review'     => $_REQUEST['yourReview'],
                        'rating'     => $_REQUEST['hidden-rate'],
                        'doctors_id' => $_REQUEST['doc_rev_id'],
                        'patient_id' => $_REQUEST['pat_rev_id']
                    ];
                    
                    
                    $this->myreviews->inserting($review_arr);
                }
        }
                $this->load->model('doctor_registration_model');
                $to_search['doctors_registration.doctors_id'] = $_REQUEST['doc_rev_id'];
                $join_retrieve[] = [
                            'table_name'=>'department',
                            'column_with'=>'doctors_registration.department_id = department.department_id']; 
                $doc_details = $this->doctor_registration_model->search_join($to_search, $join_retrieve);

                var_dump($doc_details);die;

                $this->data['view']         =   'reviews';
                $this->data['doc_details']  =   $doc_details;
                $this->data['site_title']   =   'Revitalize';
                $this->data['page_title']   =   'Reviews - '.$this->data['site_title'];

                $this->load->view('layout',$this->data);
                
    
    }
    
    
}