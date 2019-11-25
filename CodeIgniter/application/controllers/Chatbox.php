<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Chatbox extends MY_Controller{

        function __construct()
        {
            parent::__construct();
            $this->pt_id = $this->session->userdata('patient_id');
            //$this->$table_name = 'chats';
            $this->load->model('Users');
        }
        function index(){
            $data['view'] = 'Chatbox';
            $data['site_title'] = 'Chat Assignment';
            $data['page_title'] = 'Chat -'.$data['site_title'];
            $this->load->view('layout', $data);
        }

        function insert_messages(){
            $msg = [
                    'patient_id' => 5,
                    'doctors_id' => 6,
                    'chats_msg'  => $_REQUEST['msg']
                ];
                $this->Users->inserting($msg);
                $data['view'] = 'Chatbox';
                $this->load->view('layout', $data);
            }
            
            function get_messages( ){
                
                $offset = $_REQUEST['offset'];
                $data   = $this->Users->offset_retrieving($offset,5); 
                //var_dump($data);die;
                $html   = '';

            foreach($data as $chat_obj){
                $html .= "<li class='for_del'>".$chat_obj->chats_msg."</li>";
            }
            echo $html;
        }
    }