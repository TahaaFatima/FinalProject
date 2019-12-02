<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends MY_Controller {

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
                        'field' => 'Email',
                        'label' => 'email',
                        'rules' => 'trim|required|valid_email'
                    ],
                    [
                        'field' => 'Phone',
                        'label' => 'Phone',
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
                }
            if ($this->form_validation->run()) {
                $this->data['Name']                    = $_POST['Name'];
                $this->data['Email_address']           = $_POST['Email'];
                $this->data['Phone']                   = $_POST['Phone'];
                $this->data['Message']                 = $_POST['Message']; 
                $this->data['Page_view']               = 'email_format';
                $this->data['receiver_name_mail']      = 'Administrator'; 

                
                $subject        = 'Contact Us - Message';

                $mailContent = $this->load->view('email/email_layout',$this->data, true);

                $mail_to   = $this->config->item('mail_to') ;
                $mail_from = $this->config->item('mail_from');
                

                $success = $this->send_mail($subject, $mailContent, $mail_from, 'Revitalize', 'Revitalize', $mail_to);
                $this->data['success_msg'] = $success;
            }

            $this->data['view']         = 'contact_us';
            $this->data['site_title']   = 'Revitalize';
            $this->data['page_title']   = 'Contact Us - '.$this->data['site_title'];
            
            $this->load->view('layout',$this->data);
	}
}