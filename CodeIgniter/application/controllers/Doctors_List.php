<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_List extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data['view'] = 'Doctors_List';
        $this->load->view('layout',$data);
    }
}