<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patient_assessment_form extends MY_Controller
{

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $appt_slot = $this->session->userdata('appt_slot');


        if (isset($_POST['assess_submit'])) {
            $validation = [
                
            ];

            $this->form_validation->set_rules($validation);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if (!$this->form_validation->run()) { } else {
                $data = [
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
                    'medical_history'            => $_POST['other_details']
                ];

                $this->load->model('Patients_assessment_model');
                $result  = $this->Patients_assessment_model->inserting($data);

                $this->load->model('Patient_Registration_model');
                $this->Patient_Registration_model->updating(['asses_id' => $result], ['patient_id' => $this->session->userdata('user_id')]);
                $this->load->model('appt_booking_model');
                $id_returned = $this->appt_booking_model->inserting($appt_slot);
            }
        }
        $data['view'] = 'Patient_assessment_form';
        $data['page_title'] = 'Patient_assessment_form';
        $this->load->view('Layout', $data);
    }
}
