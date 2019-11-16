<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KoiController extends MY_Controller {
    function index(){
        $data['view'] = 'Koi_Controller_View';
        $this->load->view('Layout', $data);
    }
}