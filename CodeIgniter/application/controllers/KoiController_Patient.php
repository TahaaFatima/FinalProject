<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KoiController_Patient extends MY_Controller {
    function index(){
        $data['view'] = 'Patient_Controller_View';
        $this->load->view('Layout', $data);
    }
}