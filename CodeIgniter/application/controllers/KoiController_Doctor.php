<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KoiController_Doctor extends MY_Controller {
    function index(){
        $data['view'] = 'Doctor_Controller_View';
        $this->load->view('Layout', $data);
    }
}