<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doctors_registration extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->load->model('area_model');
        $area_table = $this->area_model->retrieving();

        $this->load->model('department_model');
        $department_table = $this->department_model->retrieving();

        $this->load->model('clinic_model');
        $clinic_table = $this->clinic_model->retrieving();

        $this->load->model('price_model');
        $price_table = $this->price_model->retrieving();

        $this->data['view']        = 'doctors_registration';
        $this->data['site_title']  = 'Revitalize';
        $this->data['page_title']  = 'Doctors Registration - '.$this->data['site_title']   = 'Revitalize';
        $this->data['areas']       = $area_table;
        $this->data['departments'] = $department_table;
        $this->data['clinic']      = $clinic_table;
        $this->data['prices']      = $price_table;


        if (isset($_POST['Submit'])) {
            $upload_data = '';
            $upload = false;
            $validation = [
                [
                    'field' => 'Name',
                    'label' => 'name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Age',
                    'label' => 'age',
                    'rules' => 'numeric|required'
                ],
                [
                    'field' => 'Gender',
                    'label' => 'gender',
                    'rules' => 'required'
                ],
                [
                    'field' => 'FatherName',
                    'label' => 'Father Name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Lisence',
                    'label' => 'Lisence number',
                    'rules' => 'trim|required|max_length[12]'
                ],
                [
                    'field' => 'Type',
                    'label' => 'Type',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Location',
                    'label' => 'Location',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Department',
                    'label' => 'Department',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Clinic',
                    'label' => 'Clinic',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Price',
                    'label' => 'Price',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_form',
                    'label' => 'Time From',
                    'rules' => 'required'
                ],
                [
                    'field' => 'time_to',
                    'label' => 'Time To',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Email_Address',
                    'label' => 'email address',
                    'rules' => 'trim|required|valid_email'
                ],
                [
                    'field' => 'Password',
                    'label' => 'password',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Confirm_Password',
                    'label' => 'confirm password',
                    'rules' => 'trim|required|matches[Password]'
                ],
                [
                    'field' => 'time_form',
                    'label' => 'Time from',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'time_to',
                    'label' => 'Time to',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Confirm_Password',
                    'label' => 'confirm password',
                    'rules' => 'trim|required|matches[Password]'
                ]
            ];
            $is_error = false;
            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if($_FILES['userfile']['error'] != 4){
                $upload = true;
                $upload_data = $this->do_upload($is_error);
            }
    
            if (!$this->form_validation->run() || $is_error) {
                $this->data['file_error']   =   $upload_data;
                $this->data['view']         =   'doctors_registration';
                $this->data['site_title']   =   'Revitalize';
                $this->data['page_title']   =   'Doctors Registration - '.$this->data['site_title'];
                return $this->load->view('layout', $this->data);
            } else {
                $this->load->model('doctor_registration_model');
                $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

                $doc_record = [
                    'full_name'         => $_POST['Name'],
                    'age'               => $_POST['Age'],
                    'gender'            => $_POST['Gender'],
                    'license_no'        => $_POST['Lisence'],
                    'father_name'       => $_POST['FatherName'],
                    'dr_type'           => $_POST['Type'],
                    'area_id'           => $_POST['Location'],
                    'department_id'     => $_POST['Department'],
                    'clinic_id'         => $_POST['Clinic'],
                    'price_id'          => $_POST['Price'],
                    'role_id'           => 1,
                    'email'             => $_POST['Email_Address'],
                    'password'          => $password,
                    
                ];

                if($upload){
                    $doc_record['images' ] = $upload_data['file_name'];
                }
                $result  = $this->doctor_registration_model->inserting($doc_record);
                $for_email   = $this->doctor_registration_model->retrieving(['doctors_id' => $result], false);
                $email = $for_email->email;
                $name  = $for_email->full_name;
                $this->load->model('doctor_timeslot_model');
                $time_data = [
                    'doctors_id' => $result,
                    'time_in'    => $_POST['time_form'],
                    'time_out'   => $_POST['time_to']
                ];
                $this->doctor_timeslot_model->inserting($time_data);

                $this->data['Page_view']      = 'email_confirmation';
                $this->data['receiver_name_mail']      = $name;

                $subject        = 'Account Confirmation';
                $mailContent = $this->load->view('email/email_layout',$this->data, true);
                $mail_to   = $email ;
                $mail_from = $this->config->item('mail_from');

                $success = $this->send_mail($subject, $mailContent, $mail_from, 'Revitalize', $name, $mail_to);
                
                redirect('login');
            }
        }
        $this->load->view('layout', $this->data);
    }
}