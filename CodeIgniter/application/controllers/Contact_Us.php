<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends MY_Controller {

	public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        if(isset($_POST['Submit'])){
            $validation = [
                [
                    'field' => 'Name',
                    'label' => 'name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Age',
                    'label' => 'age',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Gender',
                    'label' => 'gender',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Message',
                    'label' => 'Message',
                    'rules' => 'trim|required'
                ]
                ];

            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if ($this->form_validation->run()) {
                
            }
            


        }
        // if($bid_accepted)
        // {
        //     $reciever       = $user_info->email;
        //     $subject        = 'Project Agreement';
        //     $data['name']   = $user_info->name;
        //     $mailContent = $this->load->view('email',$data, true);

        //     $this->sendMail($subject, $mailContent, $reciever);
            
        //     return redirect(site_url('Client/index/'.$bid_project_id));
        // }

            $this->data['view'] = 'Contact_Us';
            $this->data['page_title'] = 'Contact_Us';
            $this->load->view('Layout',$this->data);
	}
}