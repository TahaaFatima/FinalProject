<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends MY_Controller
{
	public function index()
	{
            $data['view'] = 'Reviews';
            $data['page_title'] = 'Reviews';
            $this->load->view('Layout',$data);
            
            $this->load->helper('form');
            $this->load->library('form_validation');
   
        if(isset($_POST['submit-review']))
        {

            $validation = [
                [
                    'field' => 'yourReview',
                    'label' => 'Your Reviews',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'reviewRates',
                    'label' => 'Your Ratings',
                    'rules' => 'trim|required'
                ]
            ];
            $this->form_validation->set_rules($validation);
            if ($this->form_validation->run())
            {
                $review_arr = [
                    'review'    => $_REQUEST['yourReview'],
                    'rating'    => $_REQUEST['reviewRates'],
                    'doctors_id' => 1,
                    'patient_id' => 3
                ];

                $this->load->model('MyReviews');
                $this->MyReviews->inserting($review_arr);
            }

            
            
        }
    
    }
    
    
}