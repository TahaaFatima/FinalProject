<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends MY_Controller
{
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
                    $this->load->model('MyReviews');
                    
                    $review_arr = [
                        'review'    => $_REQUEST['yourReview'],
                        'rating'    => $_REQUEST['hidden-rate'],
                        'doctors_id' => $_REQUEST['doc_rev_id'],
                        'patient_id' => $_REQUEST['pat_rev_id']
                    ];
                    
                    
                    $this->MyReviews->inserting($review_arr);
                }
            }
                $data['view'] = 'Reviews';
                $data['page_title'] = 'Reviews';
                $this->load->view('Layout',$data);
                
    
    }
    
    
}