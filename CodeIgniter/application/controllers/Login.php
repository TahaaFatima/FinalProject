<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $role_id = $this->session->userdata('role_id');
        if (!empty($role_id)) {
            if ($role_id == 1) {
                redirect('KoiController_Doctor');
            } elseif ($role_id == 2) {
                redirect('KoiController_Patient');
            }
        }
    }

    function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


        if (isset($_POST['submit_login'])) {
            $check_data = [
                [
                    'field' => 'Email_Address',
                    'label' => 'Email address',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'Role',
                    'label' => 'Role',
                    'rules' => 'required'
                ]
            ];

            $this->form_validation->set_rules($check_data);
            if (!$this->form_validation->run()) {
                $data['page_title'] = 'Login';
                $data['view'] = 'Login';
                return $this->load->view('Layout', $data);
            } else {
                $this->load->model('User_Model');
                $email_address  = $_POST['Email_Address'];
                if ($_POST['Role'] == "Doctor") {
                    $this->User_Model->table_name = 'doctors_registration';
                } else {
                    $this->User_Model->table_name = 'patients_registration';
                }
                $where = ['email' => $email_address];
                $data_set = $this->User_Model->retrieving($where, false);

                if (count($data_set)) {
                    if (password_verify($_POST['Password'], $data_set->password)) {
                        $this->session->set_userdata('role_id', $data_set->role_id);
                        $this->session->set_flashdata('signed_in', 'Sign In Successful');
                        $this->session->set_userdata('emailAddress', $email_address);
                        if ($data_set->role_id == 1) {
                            return redirect('KoiController_Doctor');
                        } else if ($data_set->role_id == 2) {
                            return redirect('KoiController_Patient');
                        }
                    } else {
                        $this->session->set_flashdata('incorrectPassword', 'Incorrect Password');
                    }
                } else {
                    $this->session->set_flashdata('incorrectEmail', 'Incorrect Email Address');
                }
            }
        }
        $data['page_title'] = 'Login';
        $data['view'] = 'Login';
        $this->load->view('Layout', $data);
    }
}